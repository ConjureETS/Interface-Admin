<?php

namespace App;

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
        'password',
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

    protected $appends = [
        'email', 'first_name', 'last_name'
    ];

    public function member()
    {
        return $this->belongsTo("App\Models\Member");
    }

    public function getEmailAttribute()
    {
        return $this->member()->email;
    }

    public function getFirstNameAttribute()
    {
        return $this->member()->first_name;
    }

    public function getLastNameAttribute()
    {
        return $this->member()->last_name;
    }
}
