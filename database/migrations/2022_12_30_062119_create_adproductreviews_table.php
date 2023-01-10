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
        Schema::create('adproductreviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('product_id');
            $table->Integer('quality');
            $table->Integer('price');
            $table->Integer('value');
            $table->string('name');
            $table->string('summary');
            $table->string('review');
            $table->string('review_date');
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
        Schema::dropIfExists('adproductreviews');
    }
};
