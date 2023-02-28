<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\AmoFunctionsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Mail\SendMailController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class SendCartFormController extends Controller
{
    public function send(Request $request)
    {
        $data = json_decode($request->getContent());
        $name = $data->name;
        $company = $data->company;
        $email = $data->email;
        $phone = $data->phone;
        $managerNumber = $data->manageNumber;
        $cart = $data->cart;
        $managerInfo = $managerNumber;

        if ($managerNumber !== "" && strlen($managerNumber) === 3)
        {
            if (count(User::where('manager_number', $managerNumber)->get()) > 0) {
                $manager = User::where('manager_number', $managerNumber)->get()->first();
                $managerInfo .= " ($manager->name)";
            }
            
        }

        $formData = "Заявка с корзины сайта:\nИмя: $name \nКомпания: $company \nE-mail: $email \nТелефон: $phone \n\nМенеджер: $managerInfo
        ";
        $formClientHTML = "Ваши данные:<br><br>Имя: $name <br>Компания: $company <br>E-mail: $email <br>Телефон: $phone <br><br>";

        if (isset($manager->name)) {
            $formClientHTML .= "Ваш менеджер: ".$manager->name;
        }

        $forPDFData = [];
        $cartData = "";


        $totalRIC = 0;
        $totalOPT = 0;

        foreach ($cart as $productID => $productQuantity)
        {
            $prod = Product::find($productID);

            if (!$prod->ric_current) {
                $prod->ric_current = 0;
            }

            $prodInfo = [
                "article" => $prod->article,
                "name" => $prod->getFullTitle(),
                "quantity" => $productQuantity,
                "price_ric" => $prod->ric_current,
                "summ_ric" => $prod->ric_current*$productQuantity
            ];

            if ($prod->brand->id === 2071 || ($prod->brand->id === 2070 && $prod->status == 'on_order2')) {
                $prodInfo['text_price'] = "<span class=\"text-muted\">по запросу</span>";
                $totalRIC += 0;
            } else {
                $totalRIC += $prod->ric_current*$productQuantity;
            }

            $cartData .= $prod->article . " " . $prod->getFullTitle() . " - " . $productQuantity . " шт." . "\n";

            if (isset($manager->name))
            {
                $prodInfo["price_opt"] = $prod->wholesale_price;
                $prodInfo["summ_opt"] = $prod->wholesale_price*$productQuantity;
                $totalOPT += $prod->wholesale_price*$productQuantity;
            }

            $forPDFData['products'][] = $prodInfo;
        }

        $forPDFData['total'] = [
            "ric" => number_format($totalRIC, 0, " ", " "),
            "opt" => number_format($totalOPT, 0, " ", " ")
        ];

        if (isset($manager->name)) {
            $forPDFData['manager']['name'] = $manager->name;
        }

        $forPDFData['client'] = [
            "name" => $name,
            "company" => $company,
            "email" => $email,
            "phone" => $phone
        ];

        $formData .= "\nТовары:\n".$cartData;
        $formClientHTML .= "<br><br>Товары:<br>".str_replace(PHP_EOL, "<br>", $cartData);

        $path = (new CreatePDFController)->html($forPDFData);

        $formData .= "\nСсылка на КП: http://u1501272.isp.regruhosting.ru/".$path;
        

        $mailData = [
            "path" => $path,
            "form" => $formData,
            "email" => $email
        ];

        

        $dealData = [
            "subject" => "Заявка из корзины сайта",
            "name" => $name,
            "phone" => $phone,
            "email" => $email,
            "city" => "",
            "userNote" => $formData
        ];

        if (isset($manager)) {
            $dealData['responsible_id'] = (int)$manager->manager_amo_id;
        }

        // return $formData;

        $amo = new AmoFunctionsController();
        $amo->amoCreateDeal($dealData);

        $formData .= "<br>IP отправителя: ".$request->ip();

        $msgData = collect([
            "filePath" => $path,
            "company" => $company,
            "sendTo" => [
                [
                    "email" => "robot@hiconix.ru",
                    "name" => "Хиконикс"
                ]
            ],
            "subject" => "Заявка из корзины - Сайт Хиконикс",
            "body" => str_replace(PHP_EOL, "<br>", $formData)
        ]);

        $msgDataForClient = collect([
            "filePath" => $path,
            "company" => $company,
            "sendTo" => [
                [
                    "email" => $email,
                    "name" => $name
                ]
            ],
            "subject" => "Ваше коммерческое предложение с сайта hiconix.ru",
            "body" => $formClientHTML
        ]);

        (new SendMailController)->send($msgData);
        (new SendMailController)->send($msgDataForClient);

        return $mailData;
    }
}