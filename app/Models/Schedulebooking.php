<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedulebooking extends Model
{
    use HasFactory;

    // public function users(){
    //     return $this->belongsToMany(User::class);
    // }

    public function user() {
        return $this->belongsTo(User::class);
    }


}
