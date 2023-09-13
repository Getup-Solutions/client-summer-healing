<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminondemand extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'featured_image', 'ondemand_category', 'subscription', 'price', 'status'];


    public function adminsubscriptions(){
        return $this->belongsToMany(Adminsubscription::class, 'adminondemand_adminsubscription');
    }

    public function adminondemandcats(){
        return $this->belongsToMany(Adminondemandcat::class, 'adminondemand_adminondemandcat');
    }

    public function adminondemandtrainers(){
        return $this->belongsToMany(Admintrainer::class, 'adminondemand_admintrainer');
    }


}
