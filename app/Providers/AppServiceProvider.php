<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    public function mb_ucfirst(String $str, $encoding='UTF-8'): String
    {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
               mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        Paginator::useBootstrap();

        $productGroups = [];

        $groups = [];
        foreach(Category::where('parent_id', NULL)->get() as $group) {
            $groups[$group->id] = Category::where('parent_id', $group->id)->orderBy('sort')->get();
            if (count($groups[$group->id]) > 0 && $group->is_menu_hiconix == 1) {
                $productGroups[$group->id] = [
                    "main_info" => [
                        "title" => $group->title,
                        "link" => $group->link
                    ]
                ];
            }
        }

        foreach ($groups as $group_id => $group) {
            foreach ($group as $category) {
                $sub_cat = Category::where('parent_id', $category->id)->orderBy('sort')->get();

                $subLinks = [];

                foreach ($sub_cat as $subcat) {
                    if ($subcat->is_menu_hiconix == 1) {
                        $title = $this->mb_ucfirst(strtolower($subcat->filter_string));

                        $subLinks[] = [
                            "link" => $subcat->link,
                            "name" => $title
                        ];
                    }
                }
                if ($category->is_menu_hiconix === 1) {
                    $title = $this->mb_ucfirst(strtolower($category->filter_string));
                    if (isset($productGroups[$group_id])) {
                        $productGroups[$group_id]['sub_links'][$category->id] = [
                            "link" => $category->link,
                            "name" => $title,
                            "sub_links" => $subLinks
                        ];
                    }
                }
            }
        }

        View::share('productGroups', $productGroups);
    }
}
