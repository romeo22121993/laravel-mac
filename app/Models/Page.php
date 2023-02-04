<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;

class Page extends Model
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
        'content',
        'img',
        'author_id',
    ];

    protected $table = 'pages';

    /**
     * Get all of the categories by Post
     */
//    public function categories()
//    {
//        return $this->belongsToMany(PostCategory::class, 'posts_and_cats', 'post_id', 'cat_id');
//    }

}
