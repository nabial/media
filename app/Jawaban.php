<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban'
    protected $primaryKey = 'id_jawaban'
    //

    protected $fillable = [

        'id',
        'jawaban_1',
        'jawaban_2', 
        'jawaban_3', 
        'jawaban_4', 
        'jawaban_5', 
        'jawaban_6', 
        'jawaban_7', 
        'jawaban_8', 
        'jawaban_9', 
        'jawaban_10', 
        'score',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'id_jawaban')
    }
}
