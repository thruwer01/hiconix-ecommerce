<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class GetProductsController extends Controller
{
    public function index(Request $request) {
        $categoryID = (int) $request->query('category_id');

        $subCategories = Category::where('parent_id', $categoryID)->get();
        $compatibility = Category::find($categoryID)->compatibility;
        
        $compatibilityArray = [];
        $categoriesID = [$categoryID];
        $prodList = [];

        if (!is_null($compatibility))
        {
            $compatibilityArray = explode(',', $compatibility);
        }

        if (count($compatibilityArray) > 0)
        {
            $categoriesID = array_merge($categoriesID, $compatibilityArray);
        }

        foreach($subCategories as $cat)
        {
            if (count(Category::where('parent_id', $cat->id)->get()) > 0) {
                foreach (Category::where('parent_id', $cat->id)->get() as $catt) {
                    $categoriesID[] = $catt->id;
                }
            }
            $categoriesID[] = $cat->id;
        }

        $categoriesID = array_unique($categoriesID);

        $products = null;

        $unique_squere = [];

        foreach($categoriesID as $catID) {
            $prodList = Product::with(['category', 'brand', 'country', 'series', 'badges', 'images'])->withCount('badges')->where('category_id', $catID)->where('status_new', '!=', 0);
            
            if ($catID === 500) {
                $prodList = Product::where('brand_id', 2068);
            }
            if ($catID === 501) {
                $prodList = Product::where('brand_id', 2069);
            }
            if ($catID === 502) { //
                $prodList = Product::where('brand_id', 2070);
            }
            if ($catID === 503) { //mitsubishi
                $prodList = Product::where('brand_id', 2071);
            }
            if ($catID === 668) { //panasonic
                $prodList = Product::where('brand_id', 2078);
            }
            if ($catID === 669) { //komfovento
                $prodList = Product::where('brand_id', 2075);
            }
            
            if($request->query('squere'))
            {
                $sq = explode(',', $request->query('squere'));
                $prodList->whereIn('squere', $sq);
            }

            if($request->query('brand'))    
            {
                $tempBrand = explode(',',$request->query('brand'));
                $prodList->whereIn('brand_id', $tempBrand);
            }

            if($request->query('stock'))
            {
                $tempStock = explode(',',$request->query('stock'));
                $prodList->whereIn('human_stock', $tempStock);
            }

            if($request->query('status'))
            {
                $tempStatus = explode(',',$request->query('status'));
                $prodList->whereIn('status_new', $tempStatus);
            }

            if($request->query('in_way'))
            {
                $prodList->where('in_way', true);
            }
            
            if(!is_null($request->query('min_price')) && !is_null($request->query('max_price'))) {
                $prodList->where('ric_current', ">=", $request->query('min_price'))->where('ric_current', "<=", $request->query('max_price'));                
            }

            if(!is_null($request->query('min_squere')) && !is_null($request->query('max_squere'))) {
                $prodList->where('squere', ">=", $request->query('min_squere'))->where('squere', "<=", $request->query('max_squere'));                
            }

            foreach($prodList->get()->unique('squere')->sort(function($a,$b) {
                if ($a->squere == $b->squere) {
                    return 0;
                }
                return ($a->squere < $b->squere) ? -1 : 1;
            }) as $pSquere)
            {
                if ($pSquere->squere != 0) {
                    $unique_squere[$pSquere->squere] = [
                        "name" => $pSquere->squere . " м<sup>2</sup>",
                        "value" => $pSquere->squere
                    ];
                }
                
            }

            if (is_null($products)) {
                $products = $prodList;
            } else {
                $products->union($prodList);
            }
        }
        
        $ricPriceMin = $products->get()->min('ric_current');
        $ricPriceMax = $products->get()->max('ric_current');
        $ricSquereMin = $products->get()->min('squere');
        $ricSquereMax = $products->get()->max('squere');
        $inWayProducts = $products->get()->max('in_way');

        $unique_brands = [];
        $unique_human_stock = [];
        $unique_statuses = [];
        $unique_badges = [];
        $unique_actions = [];

        $forCounter = $products;

        foreach ($products->get()->unique('brand_id')->sort()->all() as $pBrand) {
            $unique_brands[] = [
                "name" => $pBrand->brand->name,
                "id" => $pBrand->brand->id
            ];
        }
        foreach ($products->get()->unique('human_stock')->all() as $pBrand) {
            if ($pBrand->human_stock !== "") {
                $unique_human_stock[] = [
                    "name" => $pBrand->human_stock
                ];
            }
        }
        foreach ($products->get()->unique('status_new')->all() as $pBrand) {
            if ($pBrand->status_new !== "") {
                $humanStatus = "";
                if ($pBrand->status_new === 0 || $pBrand->status_new == "0") $humanStatus = "Недоступен к заказу";
                if ($pBrand->status_new == 2 || $pBrand->status == 4) $humanStatus = "Под заказ";
                if ($pBrand->status_new == 3) $humanStatus = "<span style=\"color: red;\">Ликвидация склада</span>";
                if ($humanStatus !== "")
                {
                    $unique_statuses[] = [
                        "name" => $humanStatus,
                        "value" => $pBrand->status_new,
                    ];
                }
            }
        }

        if ($request->query('orderBy') !== "undefined")
        {
            if ($request->query('orderByDESC') === "true") {
                $orderByType = "DESC";
            } else {
                $orderByType = "ASC";
            }

            $products = $products->orderBy($request->query('orderBy'), $orderByType);
        } else {
            $products->orderBy('sort');
        }

        // $products->orderBy('ric_current', 'desc');
        $res = ProductResource::collection($products->paginate(20));

        $res->filters = [1,2,3];


        $filters = [
            "ric_price_min" => $ricPriceMin,
            "ric_price_max" => $ricPriceMax,
            "squere_min" => $ricSquereMin,
            "squere_max" => $ricSquereMax,
            "brands" => $unique_brands,
            "stock" => $unique_human_stock,
            "statuses" => $unique_statuses,
            "squeres" => $unique_squere,
            "in_way" => $inWayProducts,
        ];

        $res->additional = [
            "filters" => $filters
        ];

        return $res;
    }
}
