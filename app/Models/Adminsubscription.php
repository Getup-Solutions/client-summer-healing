<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminsubscription extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'interval'];


    public function admincourse(){
        return $this->belongsToMany(Admincourse::class, 'admincourse_adminsubscription');
    }


    // public function adminondemand(){
    //     return $this->belongsToMany(Adminondemand::class, 'adminondemand_adminondemandcat');
    // }



}
