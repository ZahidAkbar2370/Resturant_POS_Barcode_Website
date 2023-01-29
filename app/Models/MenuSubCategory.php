<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSubCategory extends Model
{
    use HasFactory;

    protected $table = "resturant_menu_sub_categories";

    protected $fillable = [
        "resturant_id",
        "resturant_menu_category_id",
        "sub_category_name",
    ];

    public function menu_category()
    {
        return $this->belongsTo("App\Models\MenuCategory", "resturant_menu_category_id", "id");
    }
}
