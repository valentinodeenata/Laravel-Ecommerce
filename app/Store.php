<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $guarded = [];


    function user()
    {
        return $this->belongsTo(User::class);
    }

    function products()
    {
        return $this->hasMany(Product::class);
    }
}
