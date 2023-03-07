<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('ユーザID');
            $table->string('text')->comment('本文');
            //論理削除
            $table->softDeletes();
            $table->timestamps();

            //インデックス（検索機能向上）を設定する
            $table->index('id');
            $table->index('user_id');
            $table->index('text');

            //外部キーに接続(usersテーブルのidとtweetsテーブルのuser_id)
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                //接続先と自動更新・自動削除を行う
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweets');
    }
}
