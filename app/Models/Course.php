<?php

namespace App\Models;

use App\Models\CourseCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;
use App\Models\CourseProgress;

class Course extends Model
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
        'faq_block',
        'transcription',
        'img',
        'published',
    ];

    protected $table = 'courses';


    /**
     * Get all of the categories by Post
     */
    public function categories()
    {
        return $this->belongsToMany(CourseCategory::class, 'courses_and_cats', 'course_id', 'cat_id');
    }

    /**
     * Get all of the categories by Post
     */
    public function lessons()
    {
        return $this->hasOne(CourseLesson::class);
    }

    /**
     * Get all of the categories by Post
     */
//    public function progress()
//    {
//        return $this->hasOne(CourseProgress::class);
//    }

}
