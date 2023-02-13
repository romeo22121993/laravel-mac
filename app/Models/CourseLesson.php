<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Course;

class CourseLesson extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [


    ];

    protected $table = 'courses_lessons';


    /**
    * Get all of the post by Category
    */
    public function course()
    {
        return $this->belongsTo(Course::class );
    }

}
