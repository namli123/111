<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id()->unsigned()->nullable(false)->comment('編號');
            $table->string('name', 100)->nullable(false)->comment('遊戲場商公司');
            $table->integer('capital')->nullable(false)->comment('資本額');
            $table->date('found_at')->nullable(true)->comment('成立日期');
            $table->string('national')->nullable(false)->comment('國家');

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
        Schema::dropIfExists('manufacturers');
    }
}
