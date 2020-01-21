<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKompetensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensi', function (Blueprint $table) {
            $table->increments('id_kompetensi')->unique();
            $table->string('judul_kd');
            $table->string('isi_kd');
            $table->string('judul_ki');
            $table->string('isi_ki');
            $table->string('judul_indikator');
            $table->string('isi_indikator');
            $table->string('judul_tujuan');
            $table->string('isi_tujuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kompetensi');
    }
}
