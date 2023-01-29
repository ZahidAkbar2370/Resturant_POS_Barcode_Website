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
        Schema::create('menu_extra_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->references('id')->on('resturant_menus')->onDelete('cascade');
            $table->string("field_name");
            $table->string("value");
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
        Schema::dropIfExists('menu_extra_fields');
    }
};
