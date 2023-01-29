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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resturant_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('customer_id');
            $table->string('total_items');
            $table->string('total_amount');
            $table->enum("order_type", ["dine_in", "take_away", "delivery"]);
            $table->enum("payment_status", ["pending", "done"])->default("pending");
            $table->enum("order_status", ["pending", "approved", "processing", "out_for_delivery", "returned", "failed", "done"]);
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
        Schema::dropIfExists('orders');
    }
};
