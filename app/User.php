<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;


/**
 * @method static create($email, $password)
 * @method static where(string $string, $email)
 */
class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
    public $timestamps = false;

    protected $fillable = ['email', 'password'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
        public function setPasswordAttribute($password)
    {

        if ( !empty($password) ) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

}


