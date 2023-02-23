<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;

class Article extends Model
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
        'original_type',
        'article_type',
        'review_status',
        'doc_file',
    ];

    protected $table = 'articles';


    /**
     * Get all of the categories by Post
     */
    public function categories()
    {
        return $this->belongsToMany(ArticleCategory::class, 'articles_and_cats', 'article_id', 'cat_id');
    }


}
