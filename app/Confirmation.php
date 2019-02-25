<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    protected $table = 'confirmation';
    protected $fillable = [
        'sender_bank',
        'bank_account_name',
        'receiver_bank',
        'amount',
        'payment_date',
        'status',
        'order_id'
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
