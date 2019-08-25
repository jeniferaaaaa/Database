<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_detail', function (Blueprint $table) {
            $table->integer('site_id')->primary();
            $table->foreign('site_id')->references('site_id')->on('id');
            $table->tinyInteger('type_id');
            $table->string('name','30');
            $table->string('attribute1','30')->nullable();
            $table->string('attribute2','30')->nullable();
            $table->string('attribute3','30')->nullable();
            $table->string('attribute4','30')->nullable();
            $table->string('attribute5','30')->nullable();
            $table->string('detail1','300000')->nullable();
            $table->string('detail2','300000')->nullable();
            $table->string('detail3','300000')->nullable();
            $table->tinyInteger('recomFlag');
            $table->tinyInteger('deleteFlag');
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
        Schema::dropIfExists('data_detail');
    }
}
