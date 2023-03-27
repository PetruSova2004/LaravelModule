<?php

namespace App\Modules\Pub\SubCategory\Models;

use App\Modules\Pub\Category\Models\Category;
use App\Modules\Pub\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['products_count', 'title', 'slug', 'category_id',];
//    protected $primaryKey = 'id'; // Тут была пустая строка

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
