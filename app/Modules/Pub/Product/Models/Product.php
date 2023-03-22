<?php

namespace App\Modules\Pub\Product\Models;

use App\Modules\Pub\BasketProducts\Models\BasketProduct;
use App\Modules\Pub\SubCategory\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'img', 'price', 'subcategory_id',];
    protected $appends = ['products'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function basket()
    {
        return $this->belongsToMany(BasketProduct::class);
    }

    public function getProductsAttribute($value) {
        return json_decode($value);
    }


}
