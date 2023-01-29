<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuExtraField extends Model
{
    use HasFactory;

    protected $table = "menu_extra_fields";

    protected $fillable = [
        "menu_id",
        "field_name",
        "value",
    ];
}
