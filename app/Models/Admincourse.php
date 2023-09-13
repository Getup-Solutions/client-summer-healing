<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admincourse extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'featured_image', 'course_category', 'subscription', 'price', 'status'];

    

    public function adminsubscriptions(){
        return $this->belongsToMany(Adminsubscription::class, 'admincourse_adminsubscription');
    }

    // public function courseusers(){
    //     return $this->belongsToMany(User::class, 'course_user');
    // }

    public function admincoursecats(){
        return $this->belongsToMany(Admincoursecat::class, 'admincourse_admincoursecat');
    }

    public function admincoursetrainers(){
        return $this->belongsToMany(Admintrainer::class, 'admincourse_admintrainer');
    }

    public function orders(){
        return $this->belongsToMany(Order::class, 'admincourse_order');
    }

    public function schedules(){
        return $this->belongsToMany(Adminschedule::class, 'admincourse_adminschedule');
    }

    


}
