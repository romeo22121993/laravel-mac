<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductBrand;
use App\Models\ProductCategory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = [];

    public function category(){
    	return $this->belongsTo(ProductCategory::class,'cat_id','id');
    }

    public function brand(){
    	return $this->belongsTo(ProductBrand::class,'brand_id','id');
    }

}
