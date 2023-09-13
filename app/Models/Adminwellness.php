<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminwellness extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'featured_image'
    ];


}
