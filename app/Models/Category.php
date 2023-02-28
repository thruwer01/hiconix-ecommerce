<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "title",
        "parent_id",
        "link",
        "is_private",
        "sort",
        "is_archive",
        "is_active",
        "html_description_header",
        "html_description_footer",
        "html_description_footer_second",
        "img_preview_path",
        "filter_string",
        "product_prefix",
        "temp_name",
        "meta_title",
        "meta_description",
        "meta_keys"
    ];

    protected $hidden = [
        "updated_at",
        "created_at"
    ];

    public static function forFilters()
    {
        $all = self::all();
        $filters = [];

        foreach($all as $category)
        {
            $filters[$category->id] = $category->title;
        }

        return $filters;
    }

    public function mb_ucfirst(String $str, $encoding='UTF-8'): String
    {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
               mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }

    public function getParentTree()
    {
        $tree = [];
        $cat = $this;
        $category = $this->mb_ucfirst($cat->filter_string);
        $category_id = $cat->id;
        $tree[] = [
            "title" => $this->mb_ucfirst($cat->filter_string),
            "link" => $cat->link[0] == "/" ? $cat->link : "/".$cat->link,
            "active" => false
        ];
        while ($category_id !== null)
        {   
            $parent_id = Category::find($category_id)->parent_id;
            if ($parent_id !== null) $category_id = $parent_id;
            if ($parent_id == null) {
                return $tree;
            }
            $catName = Category::find($category_id);
            $tree[] = [
                "title" => $this->mb_ucfirst($catName->filter_string),
                "link" => $catName->link[0] == "/" ? $catName->link : "/".$catName->link,
                "active" => true
            ];
        }
        return $tree;
    }

    public function getParentCategory()
    {
        $category_id = $this->id;
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
}
