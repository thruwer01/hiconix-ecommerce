<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AmoFunctionsController extends Controller
{
    public $accessToken;
    protected $refreshToken;
    protected $db;
    protected $subdomain = "hiconix";


    public function getTokensFromDB():void
    {
        $tokens = $this->db->select("SELECT `access_token`, `refresh_token` FROM `amocrm_tokens` WHERE `id` = '1' LIMIT 1")[0];
        $this->accessToken = $tokens->access_token;
        $this->refreshToken = $tokens->refresh_token;
    }

    public function updateTokensDB($access_token, $refresh_token):void
    {
        $this->db->update("UPDATE `amocrm_tokens` SET `access_token` = '$access_token', `refresh_token` = '$refresh_token' WHERE `id` = 1 LIMIT 1");
    }

    public function createRequest(string $link, array $data, array $headers = ['Content-Type:application/json']):array
    {
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
        curl_setopt($curl,CURLOPT_URL, $link);
        curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl,CURLOPT_HEADER, false);
        curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
        $out = curl_exec($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        $code = (int)$code;
        $errors = [
            400 => 'Bad request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not found',
            500 => 'Internal server error',
            502 => 'Bad gateway',
            503 => 'Service unavailable',
        ];
    
        $response = json_decode($out, true);
        $responseData = [
            "response" => $response
        ];
    
        if ($code < 200 || $code > 204) {
            $responseData['errorCode'] = isset($errors[$code]) ? $errors[$code] : 'Undefined error - '.$code;
        }
    
        return $responseData;
    }

    public function updateTokens():void
    {
        $link = 'https://' . $this->subdomain . '.amocrm.ru/oauth2/access_token'; //create url
        $data = [
       //FM     'client_id' => '86b67ad3-3a88-468d-95d0-27a823bf54e1',
       //FM     'client_secret' => 'Neiv8934S5I1nUU2cV1Ot8mWlto6pzltiPKK5tIQQjtPhsXIwf8Vv5SF3qUsnzRJ',
        'client_id' => '7ddca1e1-50d8-48b3-a974-0005ed8d296d',
        'client_secret' => 'i181NsyknyA3QjzrNRXw2X04pmDDDS5PgnZuYFImOo8cfV50MTugrp6yjLlwDWa0',
            'grant_type' => 'refresh_token',
            'refresh_token' => $this->refreshToken,
            'redirect_uri' => 'https://hiconix.ru',
        ];
    
        $getResponse = $this->createRequest($link, $data)['response'];
    
        if (isset($getResponse['errorCode']) && $getResponse['errorCode'] !== "") {
            die('Error: ' . $getResponse['errorCode']);
        }
    
        $tokens = [
            "access_token" => $getResponse['access_token'],
            "refresh_token" => $getResponse['refresh_token']
        ];

        $this->refreshToken = $tokens['refresh_token'];
        $this->accessToken = $tokens['access_token'];
    }

    public function amoCreateDeal(array $dealData):array
    {
        $link = 'https://' . $this->subdomain . '.amocrm.ru/api/v4/leads/complex'; //create url
    
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->accessToken
        ];
    
        if (!isset($dealData['responsible_id'])) $dealData['responsible_id'] = 7315264;
    
        $data = [
            [
                "name" => $dealData['subject'],
                "pipeline_id" => 801979,
                "status_id" => 16640374,
                "responsible_user_id" => $dealData['responsible_id'],
                "_embedded" => [
                    "contacts" => [
                        [
                            "first_name" => $dealData['name'] ? $dealData['name'] : 'Нет имени',
                            "custom_fields_values" => [
                                [
                                    "field_code" => "PHONE",
                                    "values" => [
                                        [
                                            "value" => $dealData['phone'] ? $dealData['phone'] : null,
                                        ]
                                    ]
                                ],
                                [
                                    "field_code" => "EMAIL",
                                    "values" => [
                                        [
                                            "enum_code" => "WORK",
                                            "value" => $dealData['email'] ? $dealData['email'] : null,
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ],
                ],
                "custom_fields_values" => [
                    [
                        "field_id" => 359819,
                        "values" => [
                            [
                                "value" => $dealData['userNote'] ? $dealData['userNote'] : null
                            ]
                        ]
                    ],
                    [
                        "field_id" => 575413,
                        "values" => [
                            [
                                "value" => $dealData['city'] ? $dealData['city'] : 'Не указан'
                            ]
                        ]
                    ]
                ]
            ]
        ];
    
        $getResponse = $this->createRequest($link, $data, $headers);
    
        return $getResponse;
    }

    public function __construct()
    {
        $this->db = DB::connection('mysql2');
        $this->getTokensFromDB();
        $this->updateTokens();
        $this->updateTokensDB($this->accessToken, $this->refreshToken);
    }
}
