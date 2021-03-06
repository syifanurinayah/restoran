<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'image'
    ];

    public function products(){
        return $this->hasMany(Products::class);
    }
}
