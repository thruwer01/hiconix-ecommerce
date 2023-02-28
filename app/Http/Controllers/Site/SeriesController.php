<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $title = "Все серии";

        $series = Series::all()->where('brand_id', '<>', '2071');

        return view('pages.series.index', compact('title', 'series'));
    }
    
    public function show($query_series)
    {
        if (count(Series::where('link', "/series/".$query_series)->get()) == 0) {
            $series = Series::where('link', "LIKE", "%$query_series%")->get()->firstOrFail();
        } else {
            $series = Series::where('link', "/series/".$query_series)->get()->first();
        }
        
        $title = $series->name;
        $h1 = $series->h1_content;
        $html = $series->html_description;

        $products = Product::where('series_id', $series->id)->where('status_new', '!=', 0)->get();

        return view('pages.series.show', compact('series', 'title', 'h1', 'products', 'html'));
    }
}
