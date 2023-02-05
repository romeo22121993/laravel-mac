<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $fillable = ['name', 'company', 'lastname', 'email', 'message', 'user_id'];

    protected $table = 'contacts';


    /**
     * Get all of the categories by Post
     */
    public function categories()
    {
        return $this->belongsToMany(PostCategory::class, 'posts_and_cats', 'post_id', 'cat_id');
    }

}
