<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProperty extends Model
{
    use HasFactory;

    protected $fillable = [
        "group_id",
        "name"
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];
}
