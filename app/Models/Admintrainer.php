<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admintrainer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'bio', 'image', 'phone', 'email', 'status'];


    public function admincourses(){
        return $this->belongsToMany(Admincourse::class, 'admincourse_admintrainer');
    }

    public function adminondemand(){
        return $this->belongsToMany(Adminondemand::class, 'adminondemand_adminondemandcat');
    }


}
