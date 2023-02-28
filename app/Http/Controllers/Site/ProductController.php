<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\MarketingBadge;
use App\Models\Product;
use App\Models\PropertiesToProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function index($slug, Request $request)
    {

        $product = Product::where('slug', $slug)->with('videos')->firstOrFail();
        $tree = array_reverse($product->category->getParentTree());
        $title = $product->getFullTitle();

        $images = $product->images()->get();
        if (count($images) > 0) {
            $product->main_img =  "https://erc.hiconix.ru/storage/".$images[0]->path.$images[0]->name.".".$images[0]->extension;
        } else {
            $product->main_img = "/images/products/no-photo.jpeg";
        }

        $data_slides = [];
        if (count($images) > 2) {
            foreach ($images as $index => $img) {
                $data_slides[] = "https://erc.hiconix.ru/storage/".$img->path.$img->name.".".$img->extension;
            }
        }

        $dataSlidesString = implode(",", $data_slides);

        $badges = $product->getBadges();

        $productAnonsProps = PropertiesToProduct::where('product_id', $product->id)->get();

        $anonsProps = [];

        foreach ($productAnonsProps as $prop) {
            $anonsProps[$prop->property_id] = $prop->property_value;
        }

        $propsForAnons = [];

        //пропсы справа от картинки
        if ($product->block_type_id === 3) {

        } else if ($product->getParentCategory() == 26) {
            //сплиты
            $propsForAnons[] = [
                "name" => "Инвертор",
                "value" => $product->is_invertor == "1" ? "Да" : "Нет"
            ];
            if ($anonsProps[16] !== "" && $anonsProps[16] != "0") {
                $propsForAnons[] = [
                    "name" => "Произв. холод, кВт",
                    "value" => $anonsProps[16]
                ];
            }
            if ($anonsProps[17] !== "" && $anonsProps[17] != "0") {
                $propsForAnons[] = [
                    "name" => "Произв. тепло, кВт",
                    "value" => $anonsProps[17]
                ];
            }
            if ($anonsProps[1] !== "" && $anonsProps[1] != "0") {
                $propsForAnons[] = [
                    "name" => "Режим работы",
                    "value" => $anonsProps[1]
                ];
            }
            if ($anonsProps[27] !== "" && $anonsProps[27] != "0") {
                $propsForAnons[] = [
                    "name" => "Длина трассы, м",
                    "value" => $anonsProps[27]
                ];
            }
            if ($anonsProps[28] !== "" && $anonsProps[28] != "0") {
                $propsForAnons[] = [
                    "name" => "Перепад высот",
                    "value" => $anonsProps[28]
                ];
            }
            if ($product->block_type?->id != 1) {
                if ($anonsProps[8] !== "" && $anonsProps[8] != "0" && strpos($anonsProps[8], "Wi-Fi") !== false) {
                    $propsForAnons[] = [
                        "name" => "Wi-Fi (в комплекте)",
                        "value" => "Да"
                    ];
                } else {
                    $propsForAnons[] = [
                        "name" => "Wi-Fi (в комплекте)",
                        "value" => "Нет"
                    ];
                }
                if ($anonsProps[9] !== "" && $anonsProps[9] != "0" && strpos($anonsProps[9], "Wi-Fi") !== false) {
                    $propsForAnons[] = [
                        "name" => "Wi-Fi (опционально)",
                        "value" => "Да"
                    ];
                } else {
                    $propsForAnons[] = [
                        "name" => "Wi-Fi (опционально)",
                        "value" => "Нет"
                    ];
                }
            }
        } else if ($product->getParentCategory() == 23) {
            //мультисплиты
            $propsForAnons[] = [
                "name" => "Инвертор",
                "value" => $product->is_invertor == "1" ? "Да" : "Нет"
            ];
            if ($anonsProps[1] !== "" && $anonsProps[1] != "0") {
                $propsForAnons[] = [
                    "name" => "Режим работы",
                    "value" => $anonsProps[1]
                ];
            }
            if ($anonsProps[16] !== "" && $anonsProps[16] != "0") {
                $propsForAnons[] = [
                    "name" => "Произв. холод, кВт",
                    "value" => $anonsProps[16]
                ];
            }
            if ($anonsProps[17] !== "" && $anonsProps[17] != "0") {
                $propsForAnons[] = [
                    "name" => "Произв. тепло, кВт",
                    "value" => $anonsProps[17]
                ];
            }
            if ($anonsProps[27] !== "" && $anonsProps[27] != "0") {
                $propsForAnons[] = [
                    "name" => "Длина трассы, м",
                    "value" => $anonsProps[27]
                ];
            }
            if ($anonsProps[48] !== "" && $anonsProps[48] != "0") {
                $propsForAnons[] = [
                    "name" => "Длина трассы до 1-го блока, м",
                    "value" => $anonsProps[48]
                ];
            }
            if ($anonsProps[28] !== "" && $anonsProps[28] != "0") {
                $propsForAnons[] = [
                    "name" => "Перепад высот",
                    "value" => $anonsProps[28]
                ];
            }
            if ($anonsProps[25] !== "" && $anonsProps[25] != "0") {
                $propsForAnons[] = [
                    "name" => "Max. кол-во комнат",
                    "value" => $anonsProps[25]
                ];
            }
            if ($product->block_type?->id != 1) {
                if ($anonsProps[8] !== "" && $anonsProps[8] != "0" && strpos($anonsProps[8], "Wi-Fi") && $product->block_type?->id != 1) {
                    $propsForAnons[] = [
                        "name" => "Wi-Fi (в комплекте)",
                        "value" => "Да"
                    ];
                } else {
                    $propsForAnons[] = [
                        "name" => "Wi-Fi (в комплекте)",
                        "value" => "Нет"
                    ];
                }
                if ($anonsProps[9] !== "" && $anonsProps[9] != "0" && strpos($anonsProps[9], "Wi-Fi") && $product->block_type?->id != 1) {
                    $propsForAnons[] = [
                        "name" => "Wi-Fi (опционально)",
                        "value" => "Да"
                    ];
                } else {
                    $propsForAnons[] = [
                        "name" => "Wi-Fi (опционально)",
                        "value" => "Нет"
                    ];
                }
            }
        } else if ($product->getParentCategory() == 2 || $product->getParentCategory() == 3) {
            if ($anonsProps[16] !== "" && $anonsProps[16] != "0") {
                $propsForAnons[] = [
                    "name" => "Произв. холод, кВт",
                    "value" => $anonsProps[16]
                ];
            }
            if ($anonsProps[17] !== "" && $anonsProps[17] != "0") {
                $propsForAnons[] = [
                    "name" => "Произв. тепло, кВт",
                    "value" => $anonsProps[17]
                ];
            }
            if ($anonsProps[27] !== "" && $anonsProps[27] != "0") {
                $propsForAnons[] = [
                    "name" => "Длина трассы, м",
                    "value" => $anonsProps[27]
                ];
            }
            if ($anonsProps[48] !== "" && $anonsProps[48] != "0") {
                $propsForAnons[] = [
                    "name" => "Длина трассы до 1-го блока, м",
                    "value" => $anonsProps[48]
                ];
            }
            if ($anonsProps[28] !== "" && $anonsProps[28] != "0") {
                $propsForAnons[] = [
                    "name" => "Перепад высот",
                    "value" => $anonsProps[28]
                ];
            }
            if ($anonsProps[26] !== "" && $anonsProps[26] != "0") {
                $propsForAnons[] = [
                    "name" => "Max. кол-во внутренних блоков",
                    "value" => $anonsProps[26]
                ];
            }
        }



        $forLocalStorage = [
            "title" => $title,
            "article" => $product->article,
            "model" => $product->model,
            "prefix" => $product->category->product_prefix,
            "img" => $product->main_img,
            "price" => $product->ric_current
        ];
        return response(view('pages.product', compact('propsForAnons','dataSlidesString','title', 'product', 'tree', 'forLocalStorage', 'badges')));
    }
}
