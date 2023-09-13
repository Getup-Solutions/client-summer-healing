<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admincoursecat extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function admincourses(){
        return $this->belongsToMany(Admincourse::class, 'admincourse_admincoursecat');
    }


}
