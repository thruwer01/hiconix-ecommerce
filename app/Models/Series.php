<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "brand_id",
        "name",
        "link",
        "is_private",
        "is_archive",
        "is_active",
        "html_description_header",
        "html_description_footer",
        "html_description_footer_second",
        "img_preview_path",
        "h1_content",
        "html_description",
        "html_features"
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];

    public static function forFilters()
    {
        $all = self::all();
        $filters = [];

        foreach($all as $series)
        {
            $filters[$series->id] = $series->name;
        }

        return $filters;
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
