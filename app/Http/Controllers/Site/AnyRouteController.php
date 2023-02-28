<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductProperty;
use App\Models\PropertiesGroup;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AnyRouteController extends Controller
{
    public function index($slug)
    {
        $link = "/$slug/";
        $tryGetCategory = Category::where('link', $link)->get()->first();

        if (is_null($tryGetCategory)) {
            return App::abort(404);
        }

        $tree = array_reverse($tryGetCategory->getParentTree());
        $categoryID = $tryGetCategory->id;
        $parentCategory = $tryGetCategory->getParentCategory();
        $h1 = $tryGetCategory->title;
        $allProductsBestSellers = Product::with('badges')->where('category_id', $tryGetCategory->id)->whereHas('badges', function (Builder $query) {
            $query->where('code', '(s3)');
        })->get();
        $metaTitle = $tryGetCategory->meta_title;
        $metaDescription = $tryGetCategory->meta_description;
        $metaKeys = $tryGetCategory->meta_keys;
        $htmlDescriptionHeader = $tryGetCategory->html_description_header;
        $htmlDescriptionFooter = $tryGetCategory->html_description_footer;
        $htmlDescriptionFooterSecond = $tryGetCategory->html_description_footer_second;

        $filtersGroups = [];

        foreach (PropertiesGroup::all() as $properties_group_temp) {
            $propGroupID = $properties_group_temp->id;
            $props = ProductProperty::where('group_id', $propGroupID)->get();
            $filtersGroups[$properties_group_temp->slug] = [
                "real_properties_group_name" => $properties_group_temp->name,
                "properties" => $props
            ];
        }

        $lookMore = [];
        $clarify = [];

        $subCats = Category::where('parent_id', $tryGetCategory->id)->orderBy('sort')->get();

        foreach ($subCats as $ctg) {
            if ($ctg->is_private == 1) {
                $lookMore[] = [
                    "name" => $ctg->filter_string . "(".$ctg->sort.")",
                    "link" => $ctg->link
                ];
            }
            if ($ctg->is_private == 0) {
                $clarify[] = [
                    "name" => $ctg->filter_string . "(".$ctg->sort.")",
                    "link" => $ctg->link
                ];
            }
        }

        $getDotCategories = null;
        if ($tryGetCategory->id == 1 || $tryGetCategory->id == 2 || $tryGetCategory->id == 3 || $tryGetCategory->id == 4) {
            $getDotCategories = Category::where('parent_id', $tryGetCategory->id)->where('is_private', 0)->get();
        }

        return view('pages.category_products', compact('clarify', 'lookMore', 'tryGetCategory','parentCategory', 'getDotCategories', 'filtersGroups','tree','categoryID','h1', 'allProductsBestSellers', 'metaTitle', 'metaDescription','metaKeys','htmlDescriptionHeader','htmlDescriptionFooter','htmlDescriptionFooterSecond'));
    }
}
