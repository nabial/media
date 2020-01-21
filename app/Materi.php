<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi'
    protected $primaryKey = 'id_materi'
    //

    protected $fillable = [

        'judul',
        'isi_materi', 
        'video',
        'gambar',
    ];
}
