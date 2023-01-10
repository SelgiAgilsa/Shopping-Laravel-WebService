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
        Schema::create('adproducts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('category');
            $table->Integer('subCategory');
            $table->string('productName');
            $table->string('productCompany');
            $table->Integer('productPrice');
            $table->Integer('productPriceBeforeDiscount');
            $table->longtext('productDescription');
            $table->string('productImage1');
            $table->string('productImage2');
            $table->string('productImage3');
            $table->Integer('shippingCharge');
            $table->string('productAvailability');
            $table->Integer('postingDate');
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
        Schema::dropIfExists('adproducts');
    }
};
