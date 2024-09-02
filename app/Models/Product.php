<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_price',
        'product_brand',
        'product_stock',
        'prodcut_active'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'product_brand', 'brand_id');
    }
}
