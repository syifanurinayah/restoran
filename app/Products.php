<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'image',
        'code',
        'name',
        'price',
        'discount_percent',
        'description',
        'stok',
        'status',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
