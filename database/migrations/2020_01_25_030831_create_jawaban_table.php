<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->increments('id_jawaban')->unique();
            $table->string('id');
            $table->string('jawaban_1');
            $table->string('jawaban_2');
            $table->string('jawaban_3');
            $table->string('jawaban_4');
            $table->string('jawaban_5');
            $table->string('jawaban_6');
            $table->string('jawaban_7');
            $table->string('jawaban_8');
            $table->string('jawaban_9');
            $table->string('jawaban_10');
            $table->string('score');
        });

        Schema::table('jawaban', function($table)
        {
            $table->foreign('id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
