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
        Schema::create('resturant_gernal_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resturant_id')->references('id')->on('users')->onDelete('cascade');
            $table->string("resturant_name");
            $table->string("resturant_timeline");
            $table->string("resturant_contact_no")->nullable();
            $table->string("resturant_opening_day");
            $table->string("resturant_opening_time");
            $table->string("resturant_closing_day");
            $table->string("resturant_closing_time");
            $table->string("resturant_delivery_charges")->default(0);
            $table->string("resturant_service_fee")->default(0);
            $table->string("about")->nullable();
            $table->string("address");
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
        Schema::dropIfExists('resturant_gernal_settings');
    }
};
