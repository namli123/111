<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatelogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catelogs', function (Blueprint $table) {
            $table->id()->unsigned()->nullable(false)->comment('編號');
            $table->string('name', 190)->nullable(false)->comment('名稱');
            $table->tinyInteger('mid')->unsigned()->nullable(false)->comment('廠商編號');
            $table->integer('price')->nullable(false)->comment('價格');
            $table->double('evaluation')->nullable(false)->comment('評價');
            $table->date('issue_date')->nullable(true)->comment('發行日期');
            $table->double('revenue')->nullable(false)->comment('營收');
            $table->string('game_type', 100)->nullable(false)->comment('遊戲種類');
            
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
        Schema::dropIfExists('catelogs');
    }
}
