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
        Schema::create('adordertrackhistorys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('order_id');
            $table->string('status');
            $table->string('remark');
            $table->string('posting_date');
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
        Schema::dropIfExists('adordertrackhistorys');
    }
};
