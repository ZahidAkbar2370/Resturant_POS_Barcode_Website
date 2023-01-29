<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturant_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resturant_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('menu_category_id')->references('id')->on('resturant_menu_categories')->onDelete('cascade');
            $table->foreignId('menu_sub_category_id')->references('id')->on('resturant_menu_sub_categories')->onDelete('cascade');
            $table->string("menu_name");
            $table->string("menu_image1");
            $table->string("menu_image2")->nullable();
            $table->string("menu_image3")->nullable();
            $table->string("menu_price");
            $table->string("menu_discount_price")->default("0");
            $table->longText("description");
            $table->enum("publication_status",["active", "inactive"])->default("active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resturant_menus');
    }
};
