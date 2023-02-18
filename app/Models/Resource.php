<?php

namespace App\Models;

use App\Models\ResourceCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
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

    protected $table = 'resources';


    /**
     * Get all of the categories by Post
     */
    public function categories()
    {
        return $this->belongsToMany(ResourceCategory::class, 'resources_and_cats', 'resource_id', 'cat_id');
    }

}
