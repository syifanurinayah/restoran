<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'code',
        'user_id',
        'total',
        'order_date',
        'payment_method',
        'status'
    ];

    //one to many
    public function order_detail(){
        return $this->hasMany(OrderDetail::class);
    }

    public function confirmation(){
        return $this->hasMany(Confirmation::class);
    }
}
