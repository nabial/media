<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'email';
    
    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'nama', 
        'password',
        'no_telp',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }

    const GURU_TYPE  = 'guru';
    const SISWA_TYPE = 'siswa';

    public function isGuru()    {        
        return $this->status === self::GURU_TYPE;    
    }
    public function isSiswa()    {        
        return $this->status === self::SISWA_TYPE;    
    }
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = \Hash::make($password);
    }
    
}
