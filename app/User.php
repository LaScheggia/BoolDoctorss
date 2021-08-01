<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'surname', 'address', 'bio', 'propic', 'services', 'specializations'
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

    public function specializations(){
        //uno user ha tante specializations
        return $this->belongsToMany('App\Specialization');
    }

    public function sponsors(){
        //uno user può avere più sponsorizzazioni
        return $this->belongsToMany('App\Sponsor')->withPivot('end_date');
    }

    public function messages(){
        //uno user ha tanti messaggi
        return $this->hasMany("App\Message");
    }

    public function reviews(){
        //uno user ha tante recensioni
        return $this->hasMany("App\Review");
    }
}
