<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $primaryKey = 'id';
    //

    protected $fillable = [

        'user_id',
        'no_1',
        'no_2', 
        'no_3', 
        'no_4', 
        'no_5', 
        'no_6', 
        'no_7', 
        'no_8', 
        'no_9', 
        'no_10',
        'no_11',
        'no_12', 
        'no_13', 
        'no_14', 
        'no_15', 
        'no_16', 
        'no_17', 
        'no_18', 
        'no_19', 
        'no_20',
        'score',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'id');
    }
}
