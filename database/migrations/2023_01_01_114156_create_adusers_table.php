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
        Schema::create('adusers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->Integer('contactno');
            $table->string('password');
            $table->string('shippingAddress');
            $table->string('shippingState');
            $table->string('shippingCity');
            $table->Integer('shippingPincode');
            $table->string('billingAddress');
            $table->string('billingState');
            $table->string('billingCity');
            $table->Integer('billingPincode');
            $table->string('regDate');
            $table->string('updationDate');
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
        Schema::dropIfExists('adusers');
    }
};
