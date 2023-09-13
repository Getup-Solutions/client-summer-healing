<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminondemandcat extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function adminondemands(){
        return $this->belongsToMany(Adminondemand::class, 'adminondemand_adminondemandcat');
    }


}
