<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminschedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'level',
        'scheduledate',
        'scheduletime',
        'scheduletimeend',
        'status',
    ];

    public function courses(){
        return $this->belongsToMany(Admincourse::class, 'admincourse_adminschedule');
    }


}
