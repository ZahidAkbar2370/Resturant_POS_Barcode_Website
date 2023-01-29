<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;

    protected $table = "resturant_menu_categories";

    protected $fillable = [
        "resturant_id",
        "menu_category_name",
        "menu_category_thumbnail",
    ];
}
