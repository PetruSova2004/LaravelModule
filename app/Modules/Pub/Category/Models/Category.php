<?php

namespace App\Modules\Pub\Category\Models;

use App\Modules\Pub\SubCategory\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'subcategories_count',];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

}
