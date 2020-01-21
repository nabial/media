<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    protected $table = 'kompetensi'
    protected $primaryKey = 'id_kompetensi'
    //

    protected $fillable = [

        'judul_kd',
        'isi_kd', 
        'judul_ki',
        'isi_ki',
        'judul_indikator',
        'isi_indikator',
        'judul_tujuan',
        'isi_tujuan', 
    ];
}
