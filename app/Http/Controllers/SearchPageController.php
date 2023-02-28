<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchPageController extends Controller
{
    public function index(Request $request)
    {
        $title = "Поиск";
        $searchInput = $request->get('q');
        $title .= !is_null($searchInput) ? ' по запросу "'.$searchInput.'"': '';
        
        $title .= " | Интернет-магазин Хиконикс";

        $products = Product::where("article", "LIKE", "%$searchInput%")
            ->orWhere("model", "LIKE", "%$searchInput%")
            ->orWhere("model_description", "LIKE", "%$searchInput%")
            ->orWhere("model_features", "LIKE", "%$searchInput%")
            ->orWhere("slug", "LIKE", "%$searchInput%")->get();

        return view('pages.search', compact('title','searchInput', 'products'));
    }
}
