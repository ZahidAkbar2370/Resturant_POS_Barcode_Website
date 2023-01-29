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
        Schema::create('resturant_payment_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resturant_id')->references('id')->on('users')->onDelete('cascade');
            $table->string("stripe_published_key")->nullable();
            $table->string("stripe_api_key")->nullable();
            $table->enum("stripe_publication_status", ["active", "in_active"])->nullable();

            $table->string("paypal_client_id")->nullable();
            $table->string("paypal_secret")->nullable();
            $table->enum("paypal_publication_status", ["active", "in_active"])->nullable();

            $table->string("other_key")->nullable();
            $table->string("other_secret")->nullable();
            $table->enum("other_publication_status", ["active", "in_active"])->nullable();
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
        Schema::dropIfExists('resturant_payment_settings');
    }
};
