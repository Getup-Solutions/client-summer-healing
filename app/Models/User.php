<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'subscription',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin", "manager", "superadmin"][$value],
        );
    }



    public function usersubscription(){
        return $this->belongsToMany(Usersubscription::class, 'user_usersubscription');
    }

    public function admincourses(){
        return $this->belongsToMany(Admintrainer::class, 'admincourse_admintrainer');
    }

    public function orders(){
        return $this->belongsToMany(Order::class, 'order_user');
    }

    public function events(){
        return $this->hasMany(Bookedevent::class);
    }

    public function adminevents(){
        return $this->hasMany(Adminevent::class);
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class, 'permission_user');
    }

    public function schedules(){
        return $this->hasMany(Schedulebooking::class);
    }

  




    
}
