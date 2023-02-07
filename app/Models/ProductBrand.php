<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductBrand extends Model
{
    use HasFactory;

    protected $table = 'products_brands';

    protected $fillable = [
        'name',
        'slug',
        'image',
    ];

    /**
    * Get all of the post by Category
    */
    public function products()
    {
        return $this->hasMany(Product::class );
    }

}
