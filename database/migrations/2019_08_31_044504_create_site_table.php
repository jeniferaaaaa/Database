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
            $table->string('site_purpose','30');//サイト利用目的
            $table->string('domain','30')->unique();//ドメイン名
            $table->integer('arbi_id')->unsigned();//保有管理者ID
            $table->foreign('arbi_id')->references('arbi_id')->on('arbi');//外部キー
            $table->string('at1_name')->nullable();//属性1名称
            $table->string('at2_name')->nullable();//属性2名称
            $table->string('at3_name')->nullable();//属性3名称
            $table->string('at4_name')->nullable();//属性4名称
            $table->string('at5_name')->nullable();//属性5名称
            $table->string('dt1_name')->nullable();//詳細1名称
            $table->string('dt2_name')->nullable();//詳細2名称
            $table->string('dt3_name')->nullable();//詳細3名称
            $table->integer('design')->nullable();//デザインID
            $table->string('logo_path')->nullable();//ロゴパス
            $table->integer('layout')->nullable();//レイアウト
            $table->string('color')->nullable();//カラー
            $table->string('main_path')->nullable();//メイン画像パス
            $table->string('sub_path1')->nullable();//サブ画像パス1
            $table->string('sub_path2')->nullable();//サブ画像パス2
            $table->string('sub_path3')->nullable();//サブ画像パス3
            $table->text('site_text')->nullable();//サイト説明内容
            $table->string('sns_word')->nullable();//SNSキーワード
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
        Schema::dropIfExists('site');
    }
}
