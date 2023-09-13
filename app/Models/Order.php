<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'state',
        'zip',
        'address',
        'useremail',
        'username',
        'total',
        'quantity'
    ];


    public function users(){
        return $this->belongsToMany(User::class, 'order_user');
    }

    public function admincourses(){
        return $this->belongsToMany(Admincourse::class, 'admincourse_order');
    }

    public function admintrainings(){
        return $this->belongsToMany(Admintraining::class, 'admintraining_order');
    }



}
