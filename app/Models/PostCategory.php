<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class PostCategory extends Model
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

    protected $table = 'postCategories';

    // TODO: many to many

    /**
    * Get all of the posts by Category
    */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_and_cats',  'cat_id', 'post_id' );
    }

}
