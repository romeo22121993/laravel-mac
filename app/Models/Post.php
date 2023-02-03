<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'firstname',
        'lastname',
        'phone',
        'role',
        'company',
        'position',
        'password',
    ];

    protected $table = 'posts';

    // TODO: many to many
    /**
     * Get all of the categories by Post
     */
    public function categories()
    {
        return $this->belongsToMany(PostCategory::class, 'posts_and_cats', 'post_id', 'cat_id');
    }

}
