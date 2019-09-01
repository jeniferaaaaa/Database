<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArbiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbi', function (Blueprint $table) {
            $table->increments('arbi_id');//管理者ID
            $table->string('name','30')->unique();//名前
            $table->string('email','255')->unique();//メールアドレス
            $table->string('password','30');//パスワード
            $table->timestamp('last_login');//最終ログイン日時
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
        Schema::dropIfExists('arbi');
    }
}
