<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_code',
        'name',
        'price',
        'quantity',
        'discounted_total'
    ];
}


