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
        Schema::create('resturant_sms_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resturant_id')->references('id')->on('users')->onDelete('cascade');
            $table->string("twilio_sid")->nullable();
            $table->string("twilio_messfing_service_sid")->nullable();
            $table->string("twilio_driver")->nullable();
            $table->string("twilio_token")->nullable();
            $table->string("twilio_from")->nullable();
            $table->string("twilio_otp_template")->nullable();
            $table->enum("publication_status", ["active", "in_active"])->nullable();
            $table->enum("status", ["verified", "not_verified"])->nullable();
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
        Schema::dropIfExists('resturant_sms_settings');
    }
};
