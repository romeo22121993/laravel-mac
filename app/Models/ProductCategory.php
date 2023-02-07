<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'cat_id',
        'subcat_id',
        'icon',
    ];

    protected $table = 'products_categories';

    /**
    * Get all of the post by Category
    */
    public function products()
    {
        return $this->hasMany(Product::class );
    }

}
