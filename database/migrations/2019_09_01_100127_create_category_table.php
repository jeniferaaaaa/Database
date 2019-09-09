<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('category_id');//カテゴリID
            $table->integer('site_id')->unsigned();//サイトID
            $table->foreign('site_id')->references('id')->on('site');//外部キー
            $table->string('category_name','30');//カテゴリ名称
            $table->string('category_path')->nullable();//カテゴリ画像パス
            $table->text('category_text')->nullable();//カテゴリ説明文
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
        Schema::dropIfExists('category');
    }
}
