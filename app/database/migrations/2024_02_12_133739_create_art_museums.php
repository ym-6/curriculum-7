<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtMuseums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_museums', function (Blueprint $table) {
            $table->bigIncrements('id');
            //美術館名
            $table->string('name', '255');
            //郵便番号
            $table->string('postalcode',8);
            //住所（都道府県）ID
            $table->unsignedTinyInteger('prefecture_id'); // 外部キーとして使用するカラムを追加
            $table->foreign('prefecture_id')->references('id')->on('prefectures'); // 外部キー制約を設定
            //それ以降
            $table->string('address', '255');
            //電話番号
            $table->string('tel',20);
            //削除フラグ
            $table->boolean('del_flg')->default(0);
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
        Schema::dropIfExists('art_museums');
    }
}
