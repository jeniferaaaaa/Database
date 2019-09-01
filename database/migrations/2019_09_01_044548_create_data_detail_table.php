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
            $table->increments('data_id');//データID
            $table->integer('site_id')->unsigned();//サイトID
            $table->foreign('site_id')->references('id')->on('site');//外部キー
            $table->string('name','30');//名称
            $table->string('image_path')->nullable();//画像パス
            $table->string('attribute1','30')->nullable();//属性1
            $table->string('attribute2','30')->nullable();//属性2
            $table->string('attribute3','30')->nullable();//属性3
            $table->string('attribute4','30')->nullable();//属性4
            $table->string('attribute5','30')->nullable();//属性5
            $table->text('detail1')->nullable();//詳細1
            $table->text('detail2')->nullable();//詳細2
            $table->text('detail3')->nullable();//詳細3
            $table->timestamps();//作成日時と更新日時
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
