<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $title = 'Главная';

        $categories = [];

        $categories[] = Category::find(505);
        
        $cat3 =  Category::find(3);
        $cat3->title = "Коммерческие кондиционеры";
        $categories[] = $cat3;
        
        
        $categories[] = Category::find(34);
        $categories[] = Category::find(5);
        // $categories[] = Category::find(4);
        
        

        $actions = News::where('show_on_index', true)->get();
        return view('pages.index', compact('actions', 'title', 'categories'));
    }
}
