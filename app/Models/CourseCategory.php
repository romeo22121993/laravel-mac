<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class CourseCategory extends Model
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

    protected $table = 'courseCategories';


    /**
    * Get all of the post by Category
    */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_and_cats',  'cat_id', 'course_id' );
    }

}
