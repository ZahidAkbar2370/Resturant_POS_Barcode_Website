<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = "resturant_menus";

    protected $fillable = [
        "resturant_id",
        "menu_category_id",
        "menu_sub_category_id",
        "menu_name",
        "menu_image1",
        "menu_image2",
        "menu_price",
        "menu_discount_price",
        "description",
        "publication_status",
    ];
}
