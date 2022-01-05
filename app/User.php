<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function stagechecks()
    {
        return $this->hasMany(Stagecheck::class);
    }
    
    public function stageScore()
    {
        return $this->hasMany(stageScore::class);
    }
    
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
}
