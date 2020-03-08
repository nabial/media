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
            $table->increments('id')->unique();
            $table->string('user_id');
            $table->string('no_1')->nullable();
            $table->string('no_2')->nullable();
            $table->string('no_3')->nullable();
            $table->string('no_4')->nullable();
            $table->string('no_5')->nullable();
            $table->string('no_6')->nullable();
            $table->string('no_7')->nullable();
            $table->string('no_8')->nullable();
            $table->string('no_9')->nullable();
            $table->string('no_10')->nullable();
            $table->string('no_11')->nullable();
            $table->string('no_12')->nullable();
            $table->string('no_13')->nullable();
            $table->string('no_14')->nullable();
            $table->string('no_15')->nullable();
            $table->string('no_16')->nullable();
            $table->string('no_17')->nullable();
            $table->string('no_18')->nullable();
            $table->string('no_19')->nullable();
            $table->string('no_20')->nullable();
            $table->integer('score')->nullable();
            $table->timestamps();
        });

        Schema::table('jawaban', function($table)
        {
            $table->foreign('user_id')
                ->references('email')
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
