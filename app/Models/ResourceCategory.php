<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resource;

class ResourceCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
    ];

    protected $table = 'resourceCategories';

    /**
    * Get all of the post by Category
    */
    public function resources()
    {
        return $this->belongsToMany(Guide::class, 'resources_and_cats',  'cat_id', 'resource_id' );
    }

}
