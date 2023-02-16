<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class GuideCategory extends Model
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

    protected $table = 'guideCategories';

    /**
    * Get all of the post by Category
    */
    public function guides()
    {
        return $this->belongsToMany(Guide::class, 'guides_and_cats',  'cat_id', 'guide_id' );
    }

}
