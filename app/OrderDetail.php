<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
        'price'
    ];

    
    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function products(){
        return $this->belongsTo(Products::class);
    }
}
