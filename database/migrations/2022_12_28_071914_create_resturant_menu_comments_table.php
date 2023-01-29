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
        Schema::create('resturant_menu_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resturant_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('menu_id')->references('id')->on('resturant_menus')->onDelete('cascade');
            $table->string("parent_id")->nullable();
            $table->string("message");
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
        Schema::dropIfExists('resturant_menu_comments');
    }
};
