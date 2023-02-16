<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;

class Guide extends Model
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
        'doc_type',
        'doc_file',
        'img',
        'author_id',
    ];

    protected $table = 'guides';


    /**
     * Get all of the categories by Post
     */
    public function categories()
    {
        return $this->belongsToMany(GuideCategory::class, 'guides_and_cats', 'guide_id', 'cat_id');
    }

}
