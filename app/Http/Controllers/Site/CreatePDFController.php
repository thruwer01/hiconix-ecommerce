<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class CreatePDFController extends Controller
{
    public function html($data)
    {
        $pdf = PDF::loadView('pdf.kp', compact('data'));
        $time = time();

        $path = "kp/kp-$time.pdf";
        $pdf->save("$path");
        return $path;
        // return $pdf->download($path);
    }
}
