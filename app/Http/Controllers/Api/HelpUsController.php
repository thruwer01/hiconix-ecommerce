<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelpUsController extends Controller {

    public function send(Request $request) {

        $data = json_decode($request->getContent());
        
        $ip = $request->ip();
        $time = date("Y-m-d H:i:s");
    }

}