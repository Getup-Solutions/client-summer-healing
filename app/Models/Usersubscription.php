<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usersubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'interval',
        'email',
        'phone',
        'start_date',
        'next_date',
        'customer_id',
        'transaction_id',
        'card_type',
        'card',
        'status',
    ];




    public function users(){
        return $this->belongsToMany(User::class, 'user_usersubscription');
    }


}
