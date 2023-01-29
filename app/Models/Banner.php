<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = "resturant_banners";

    protected $fillable = [
        "resturant_id",
        "banner_title",
        "banner_image",
        "banner_expiry_date",
    ];
}
