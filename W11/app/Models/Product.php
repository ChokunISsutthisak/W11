<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'category', 'description', 'price', 'stock', 'status'
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];
}
