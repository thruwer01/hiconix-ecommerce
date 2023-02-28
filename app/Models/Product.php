<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;

class Product extends Model
{
    use HasFactory, Attachable;

    public $props;

    protected $allowedFilters = [
        'id',
        'series_id',
        'brand_id',
        'status',
        'category_id',
        'article',
        'model'
    ];

    protected $allowedSorts = [
        'id',
        'series_id',
        'brand_id',
        'status',
        'category_id',
        'article',
        'model'
    ];

    protected $fillable = [
        'brand_id',
        'old_id',
        'site_id',
        'article',
        'model',
        'category_id',
        'series_id',
        'squere',
        'block_type_id',
        'inner_block_color',
        'model_description',
        'model_features',
        'stock',
        'human_stock',
        'status',
        'producing_country_id',
        'sort',
        'is_in_stock',
        'ric_current',
        'wholesale_price',
        'in_way',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function country()
    {
        return $this->belongsTo(ProducingCountry::class);
    }

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function blockType()
    {
        return $this->belongsTo(BlockType::class);
    }

    public function getPrefix()
    {
        $productPrefix = $this->category()->get()[0]->product_prefix;
        
        if (!is_null($productPrefix)) return $productPrefix;
        return null;
    }

    public function getFullTitle()
    {
        return $this->getPrefix() . " " . $this->brand->name . " " . $this->model;
    }

    public function images()
    {
        return $this->attachment('photo');
    }

    public function docs()
    {
        return $this->attachment('documents');
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }

    public function badges()
    {
        return $this->hasMany(ProductBadge::class);
    }

    public function getStockHTML()
    {
        $html = null;
        if ($this->human_stock == "мало") {
            $html = "
                <div class=\"mt-2 d-flex\" style=\"vertical-align: middle; line-height: 20px;\">
                    <div style=\"color: rgb(0, 209, 0); font-size: 8px;\">
                        <i class=\"fa-solid fa-circle\"></i>
                        <i class=\"fa-regular fa-circle\"></i>
                        <i class=\"fa-regular fa-circle\"></i>
                    </div>
                    <span class=\"mx-2\">Склад: мало</span>
                </div>
            ";
        }
        if ($this->human_stock == "достаточно") {
            $html = "
                <div class=\"mt-2 d-flex\" style=\"vertical-align: middle; line-height: 20px;\">
                    <div style=\"color: rgb(0, 209, 0); font-size: 8px;\">
                        <i class=\"fa-solid fa-circle\"></i>
                        <i class=\"fa-solid fa-circle\"></i>
                        <i class=\"fa-regular fa-circle\"></i>
                    </div>
                    <span class=\"mx-2\">Склад: достаточно</span>
                </div>
            ";
        }
        if ($this->human_stock == "много") {
            $html = "
                <div class=\"mt-2 d-flex\" style=\"vertical-align: middle; line-height: 20px;\">
                    <div style=\"color: rgb(0, 209, 0); font-size: 8px;\">
                        <i class=\"fa-solid fa-circle\"></i>
                        <i class=\"fa-solid fa-circle\"></i>
                        <i class=\"fa-solid fa-circle\"></i>
                    </div>
                    <span class=\"mx-2\">Склад: много</span>
                </div>
            ";
        }
        return $html;
    }

    public function getStatusHTML () {
        $statuses = [];

        if ($this->status_new == "0") {
            $statuses[] = [
                "html" => "<div class=\"mt-2 d-flex\" style=\"vertical-align: middle; line-height: 20px;\">
                    <div style=\"color: gray; font-size: 8px;\">
                        <i class=\"fa-solid fa-circle\"></i>
                        <i class=\"fa-solid fa-circle\" style=\"opacity: 0;\"></i>
                    </div>
                <span>Недоступен к заказу</span>
                </div>",
                "withStock" => false
            ];
        }

        if ($this->status_new == "1") {
            if ($this->stock > 0) {
                $statuses[] = [
                    "html" => "
                        <div class=\"mt-2 d-flex\" style=\"vertical-align: middle; line-height: 20px;\">
                            <div style=\"color: rgb(0, 209, 0); font-size: 8px;\">
                                <i class=\"fa-solid fa-circle\"></i>
                                <i class=\"fa-solid fa-circle\" style=\"opacity: 0;\"></i>
                            </div>
                            <span>В наличии</span>
                        </div>
                    ",
                    "withStock" => true,
                ];
            }

            if ($this->stock <= 0 && $this->in_way == true) {
                $statuses[] = [
                    "html" => "
                        <div class=\"mt-2 d-flex\" style=\"vertical-align: middle; line-height: 20px;\">
                            <div style=\"color: rgb(253, 196, 40); font-size: 8px;\">
                                <i class=\"fa-solid fa-circle\"></i>
                                <i class=\"fa-solid fa-circle\" style=\"opacity: 0;\"></i>
                            </div>
                            <span>В пути</span>
                        </div>
                        ",
                    "withStock" => false
                ];
            }
        }
                
        if ($this->status_new == "2" || $this->status_new == "4") {
            if ($this->stock <= 0) {
                $statuses[] = [
                    "html" => "
                        <div class=\"mt-2 d-flex\" style=\"vertical-align: middle; line-height: 20px;\">
                            <div style=\"color: rgb(253, 196, 40); font-size: 8px;\">
                                <i class=\"fa-solid fa-circle\"></i>
                                <i class=\"fa-solid fa-circle\" style=\"opacity: 0;\"></i>
                            </div>
                            <span>Под заказ</span>
                        </div>
                    ",
                    "withStock" => false
                ];
            }
            if ($this->stock <= 0 && $this->in_way == true) {
                $statuses[] = [
                    "html" => "
                        <div class=\"mt-2 d-flex\" style=\"vertical-align: middle; line-height: 20px;\">
                            <div style=\"color: rgb(253, 196, 40); font-size: 8px;\">
                                <i class=\"fa-solid fa-circle\"></i>
                                <i class=\"fa-solid fa-circle\" style=\"opacity: 0;\"></i>
                            </div>
                            <span>В пути</span>
                        </div>
                    ",
                    "withStock" => false
                ];
            }
        }

        if ($this->status_new == "3") {
            if ($this->stock > 0) {
                $statuses[] = [
                    "html" => "
                        <div class=\"mt-2 d-flex\" style=\"vertical-align: middle; line-height: 20px;\">
                            <div style=\"color: red; font-size: 8px;\">
                                <i class=\"fa-solid fa-circle\"></i>
                                <i class=\"fa-solid fa-circle\" style=\"opacity: 0;\"></i>
                            </div>
                            <span style=\"color:red;\">Ликвидация склада</span>
                        </div>
                    ",
                    "withStock" => true
                ];
            }
        }

        return $statuses;
    }

    protected $hidden = [
        "created_at",
        "updated_at",
        "old_id",
        "stock",
        "site_id",
        "wholesale_price"
    ];
    
    public function block_type()
    {
        return $this->belongsTo(BlockType::class);
    }

    public function sets()
    {
        $tempArray = ProductSet::where('product_id', $this->id)->get()->toArray();
        $array = [];
        foreach ($tempArray as $arr) {
            $array[] = Product::find($arr['set_product_id']);
        }

        return $array;
    }

    public function options_in_sets()
    {
        $tempArray = ProductOptionInSet::where('product_id', $this->id)->get()->toArray();
        $array = [];
        foreach ($tempArray as $arr) {
            $array[] = Product::find($arr['set_option_id']);
        }

        return $array;
    }

    public function options_not_in_sets()
    {
        $tempArray = ProductOptionNoInSet::where('product_id', $this->id)->get()->toArray();
        $array = [];
        foreach ($tempArray as $arr) {
            $array[] = Product::find($arr['set_option_id']);
        }

        return $array;
    }

    public function getParentTree()
    {
        $tree = [];
        $cat = $this->category;
        $category = $cat->title;
        $category_id = $cat->id;
        $tree[] = $category; 
        while ($category_id !== null)
        {   
            $parent_id = Category::find($category_id)->parent_id;
            if ($parent_id !== null) $category_id = $parent_id;
            if ($parent_id == null) {
                return $tree;
            }
            $catName = Category::find($category_id)->title;
            $tree[] = $catName;
        }
        return $tree;
    }

    public function getParentCategory()
    {
        $category_id = $this->category->id;
        while ($category_id !== null)
        {
            if ($category_id == 117) return $category_id;
            $parent_id = Category::find($category_id)->parent_id;
            if ($parent_id !== null) $category_id = $parent_id;
            if ($parent_id == null) {
                return $category_id;
            }
            if ($category_id == 117) return $category_id;
            if ($category_id == 23 OR $category_id == 26) return $category_id;
        }
    }

    public function getBadges()
    {
        $badges = [];
        foreach ($this->badges()->get() as $badge) {
            $tryGetBadge = MarketingBadge::where('code', $badge->code)->get();

            if (count($tryGetBadge) > 0) {
                $thisBadge = $tryGetBadge->first();

                $thisBadgeImage = $thisBadge->images()->get();
                if (count($thisBadgeImage) > 0) {
                    $badgeImage = $thisBadgeImage->first();

                    $badgeData = [
                        "img" => "https://erc.hiconix.ru/storage/".$badgeImage->path.$badgeImage->name.".".$badgeImage->extension,
                        "title" => $thisBadge->title,
                        "code" => $thisBadge->code,
                    ];

                    $fontSize = strval($thisBadge->font_size)."px";
                    if ($thisBadge->inner_text) {
                        $badgeData['text_html'] = "<span style=\"font-weight: bold; position: absolute; width: 90%; height: 125%; display: flex; align-items: center; justify-content: center; font-size: $fontSize; color: $thisBadge->color; z-index: 99999999;\">$thisBadge->inner_text</span>";
                    }
                    $badges[] = $badgeData;
                }
            }
        }
        return $badges;
    }

    public function properties()
    {
        $property_info = PropertiesToProduct::where('product_id', $this->id)->get();

        $product_properties = [];

        foreach (PropertiesGroup::all() as $properties_group_temp) {
            $product_properties[$properties_group_temp->slug] = [
                "real_properties_group_name" => $properties_group_temp->name,
                "properties" => []
            ];
        }
        
        foreach ($property_info as $property) {
            $property_value = $property->property_value;
            $property_id = $property->property_id;

            $property_main_info = ProductProperty::where('id', $property_id)->get()[0];
            $property_group_info = PropertiesGroup::where('id', $property_main_info->group_id)->get()[0];
            $property_name = $property_main_info->name;
            
            $product_properties[$property_group_info->slug]["properties"][] = [
                "property_id" => $property_id,
                "property_units" => $property_main_info->units,
                "property_name" => $property_name,
                "property_value" => $property_value
            ];
        }
    
        return $product_properties;
    }

    public function getMetaTitle()
    {
        //По мета тегам только на товары: вр. поставить- "конечный род + бренд + модель" - купить оптом в Хиконикс
        return implode(" ", [$this->getPrefix(), $this->brand->name, $this->model]);
    }

    public function getMetaDescription()
    {
        // Дисрипт:   Купить + бренд + модель + оптом и заказать по низкой цене с доставкой от крупного поставщика Хиконикс с 25 летним опытом. Климатическая техника, гарантированы скидки, оптовые цены, авторизация в регионах.
        return implode(" ", ["Купить", $this->brand->name, $this->model, "оптом и заказать по низкой цене с доставкой от крупного поставщика Хиконикс с 25 летним опытом. Климатическая техника, гарантированы скидки, оптовые цены, авторизация в регионах."]);
    }

    public function getMetaKeywords()
    {
        // Кейворд: бренд + модель
        return implode(" ", [$this->brand->name, $this->model]);
    }

    public function getSimilarLinks()
    {
        $product = $this;
        $category = $this->category;
        $category_id = $category->getParentCategory();
        $series = $product->series;
        $block_type_id = $product->block_type_id;
        $product_id = $product->id;

        $text_prefix = "";

        if ($block_type_id == 2) {
            $text_prefix = "";
        }
        $prop_id = 0;

        if ($block_type_id === 1) {
            if($category_id !== 26) {
                //комнаты = 25 ид
                //блоки = 26 ид
                $text_prefix = "блок";
                $prop_id = 26;
                if ($category_id == 23) {
                    $prop_id = 25;
                    $text_prefix = "комнат";
                }
            }
        }
        if ($series) {
            if ($series->id) {
                $similarProducts = Product::orderBy('squere')->where('series_id', $series->id)->where('block_type_id', $block_type_id)->where('category_id', $category->id)->get();
            }
        }
        
        $response = [];
        if (isset($similarProducts)) {
            foreach ($similarProducts as $prod)
            {
                $active = $product_id === $prod->id ? true: false;
    
                if (is_null($prod->squere)) continue 1;
                if ($prop_id > 0) {
                    $propValue = PropertiesToProduct::where('product_id', $prod->id)->where('property_id', $prop_id)->get()->first()->property_value;
                    $propPostfix = null;
                    if ($prop_id == 25) {
                        if ($propValue === 1) {
                            $propPostfix = "y";
                        }
                        if ($propValue > 1 && $propValue < 5) {
                            $propPostfix = "ы";
                        }
                    }
    
                    if ($prop_id == 26) {
                        if ($propValue > 1 && $propValue < 5) {
                            $propPostfix = "а";
                        }
                        if ($propValue >= 5) {
                            $propPostfix = "ов";
                        }
                    }
                    
    
                }
                $data = [
                    "text" => $prod->squere . " м²",
                    "link" => [
                        "product" => $prod->slug,
                    ],
                    "active" => $active,
                    "crossed" => $prod->status_new == 0 ? true : false,
                ];
    
                if ($prop_id > 0) {
                   $data["text"] .= "<sup class=\"text-muted\"> на $propValue $text_prefix$propPostfix </sup>";
                }
                
                if($prod->status_new === 0) {

                } else {
                    $response[] = $data;
                }
            }
        }

        return $response;
    }

    public function __construct()
    {
        $this->props = $this->properties();
    }
}
