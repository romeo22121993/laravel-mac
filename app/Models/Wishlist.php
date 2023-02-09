<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = true;
    protected $table   = 'wishlist';

    public function products() {
        return $this->belongsTo(Product::class,'product_id','id' );
    }

    /**
     *
     */
    public static function boot()
    {
        parent::boot();
        static::creating( function ( $model ) {
            $model->created_at = $model->freshTimestamp();
            $model->updated_at = $model->freshTimestamp();
        });
    }

}
