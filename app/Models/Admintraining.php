<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admintraining extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'price','status'];

    public function orders(){
        return $this->belongsToMany(Order::class, 'admintraining_order');
    }


}
