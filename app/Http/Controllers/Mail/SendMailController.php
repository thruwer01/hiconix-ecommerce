<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class SendMailController extends Controller
{
    public function send($msgData)
    {
        $mail = new PHPMailer(true);

        $mail->isSMTP();   
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth = true; 
        $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

        $mail->Host = env('MAIL_HOST');
        $mail->Username = env('MAIL_USERNAME');
        $mail->Password = env('MAIL_PASSWORD');
        $mail->Port = intval(env('MAIL_PORT'));
        $mail->SMTPSecure = 'ssl';

        $mail->setFrom(env('MAIL_USERNAME'), 'Хиконикс');

        foreach ($msgData['sendTo'] as $sendTo) {
            $mail->addAddress($sendTo['email'], $sendTo['name']);
        }

        if (isset($msgData['filePath'])) {
            $mail->addAttachment($msgData['filePath'], "Коммерческое предложение для ".$msgData['company']. " от ".date('d.m.Y').".pdf");
        }
        
        $mail->isHTML(true);

        $mail->Subject = $msgData['subject'];
        $mail->Body = $msgData['body'];

        if ($mail->send()) {
            $result = "success";
        } else {
            $result = "error";
        }
        
        return [
            "result" => $result
        ];
    }
}
