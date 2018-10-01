<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = false;

    protected $fillable = [
        'product_name', 'product_price', 'product_sku', 'product_description', 'product_image'
    ];
}
