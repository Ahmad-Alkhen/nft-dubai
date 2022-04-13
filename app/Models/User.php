<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function profile()
    {
        return $this->hasMany('App\Profile');
    }

    public function bookmark()
    {
        return $this->hasMany('App\Bookmark');
<<<<<<< HEAD
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'gmail_id',
        'fb_id',
        'role',
        'activated',
        'status',
    ];





=======
    } 

    public function employee()
    {
        return $this->hasOne('App\Employee');
    } 


     
    
  
>>>>>>> 592ceb2f0f859e266da153a0cda95b8767137194
    protected $guarded = [];



    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];
}
