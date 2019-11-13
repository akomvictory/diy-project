<?php


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'verifyToken', 'registrationPurpose', 
        'appActiveStageURL', 'chargedAmount',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

         public function businessUser(){

        return $this->hasMany('App\netguardrepo');
    }


         public function NetGuard(){

        return $this->hasOne('App\netguardrepo');
    }

      public function likes(){

        return $this->hasMany('App\NetGuardLike');
    }

}





















/*

JUST REPLACE WITH THE COMMENTED CODES BELOW IF SOMETHING GOES WRONG


NORMAIL STATE HERE::::::::::::::::::



namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /* 
    protected $hidden = [
        'password', 'remember_token',
    ];
}

*/