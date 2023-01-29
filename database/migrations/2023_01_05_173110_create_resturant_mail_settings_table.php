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
        Schema::create('resturant_mail_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resturant_id')->references('id')->on('users')->onDelete('cascade');
            $table->string("mailer_name")->nullable();
            $table->string("host_name")->nullable();
            $table->string("driver")->nullable();
            $table->string("port")->nullable();
            $table->string("user_name")->nullable();
            $table->string("email_id")->nullable();
            $table->string("encryption")->nullable();
            $table->string("password")->nullable();
            $table->enum("status", ["verified", "not_verified"]);
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
        Schema::dropIfExists('resturant_mail_settings');
    }
};
