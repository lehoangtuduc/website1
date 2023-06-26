<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['store_id', 'product_name', 'description', 'price', 'available_quantity'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
