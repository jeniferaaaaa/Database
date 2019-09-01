<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masta', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();//カテゴリID
            $table->foreign('category_id')->references('category_id')->on('category');//外部キー
            $table->integer('data_id')->unsigned();//データID
            $table->foreign('data_id')->references('data_id')->on('data_detail');//外部キー
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masta');
    }
}
