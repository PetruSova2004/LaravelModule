<?php

namespace App\Modules\Pub\BasketProducts\Models;

use App\Modules\Pub\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketProduct extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'count'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
