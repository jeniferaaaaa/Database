<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name','30')->unique();//サイト名称
            $table->string('domain','30')->unique();//ドメイン名
            $table->integer('design')->nullable();//デザインID
            $table->string('logo_path')->nullable();//ロゴパス
            $table->integer('layout')->nullable();//レイアウト
            $table->string('color')->nullable();//カラー
            $table->string('main_path')->nullable();//メイン画像パス
            $table->string('sub_path')->nullable();//サブ画像パス
            $table->text('site_text')->nullable();//サイト説明内容
            $table->integer('arbi_id')->unsigned();//保有管理者ID
            $table->foreign('arbi_id')->references('arbi_id')->on('arbi');//外部キー
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
        Schema::dropIfExists('id');
    }
}
