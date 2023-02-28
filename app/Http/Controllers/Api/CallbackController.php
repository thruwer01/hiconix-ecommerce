<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AmoFunctionsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Mail\SendMailController;
use Illuminate\Http\Request;

class CallbackController extends Controller
{
    public function index(Request $request)
    {
        $data = json_decode($request->getContent());

        $fromMail = 'hiconix@ecoclima.ru';
        $fromName = 'Форма с hiconix.ru';

        $name = $data->name;
        $phone = $data->phone;
        $email = $data->email;
        $request_goal = $data->requestGoal;
        $city = $data->city;
        $comment = $data->comment;

        $ip = $request->ip();
        $url = $request->headers->get('referer');
        $time = date("Y-m-d H:i:s");

        if ($request_goal == "retail") {
            $subject = 'Форма-РОЗНИЦА-hiconix.ru';
            $emailTo = ["robot@hiconix.ru", "fm@hiconix.ru"];
        }
    
    
        if ($request_goal == "dealer") {
            $subject = 'Форма-ОПТ-hiconix.ru';
            $emailTo = ["robot@hiconix.ru", "fm@hiconix.ru"];
        }
    
        if ($request_goal == "commerc") {
            $subject = 'Форма-Директору-hiconix.ru';
            $emailTo = ["robot@hiconix.ru", "fm@hiconix.ru"];
        }
    
        $crmSubject = $subject;
        //$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: <$fromMail>"; 
    
        // тело письма
        $body = "Получен заказ Звонка или Eмаил с сайта {$_SERVER['SERVER_NAME']}:\n
        Имя: $name
        Город: $city
        Телефон: $phone
        E-mail: $email \n";
        
        if ($comment !== "") {
            $body .= "Комментарий: $comment\n\n";
        } else {
            $body .= "\n\n";
        }

        $dealData = [
            "subject" => $crmSubject,
            "name" => $name,
            "phone" => $phone,
            "email" => $email,
            "city" => $city,
            "userNote" => $comment
        ];

        $amo = new AmoFunctionsController();
        $amo->amoCreateDeal($dealData);

        $body .= "IP-адрес посетителя: $ip
        Время заявки: $time";

        $msgData= [
            "sendTo" => [],
            "subject" => $subject,
            "body" => str_replace(PHP_EOL, "<br>", $body)
        ];

        foreach ($emailTo as $em) {
            $msgData['sendTo'][] = [
                "email" => $em,
                "name" => $subject
            ];
        }

        (new SendMailController)->send($msgData);

        return [
            "status" => true
        ];
    }
}
