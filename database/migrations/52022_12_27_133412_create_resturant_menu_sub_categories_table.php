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
        Schema::create('resturant_menu_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resturant_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('resturant_menu_category_id')->references('id')->on('resturant_menu_categories')->onDelete('cascade');
            $table->string("sub_category_name");
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
        Schema::dropIfExists('resturant_menu_sub_categories');
    }
};
