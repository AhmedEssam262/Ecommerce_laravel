<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use Notifiable;

    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'product_title',
        'quantity',
        'price' ,
        'image' ,
        'product_id' ,
        'user_id' ,
    ];
}
