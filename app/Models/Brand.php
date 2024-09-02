<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_name',
        'brand_active'
    ];
    protected $primaryKey = 'brand_id';

    public function products()
    {
        return $this->hasMany(Product::class, 'product_brand', 'brand_id');
    }
}
