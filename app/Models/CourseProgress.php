<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;

class CourseProgress extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'course_id',
        'progress_bar_lessons_seconds',
        'completed_courses',
        'progress_bar_courses',
        'last_iteraction',
        'progress_bar_lessons',
    ];

    protected $table = 'courses_progresses';


    /**
    * Get all of the post by Category
    */
    public function course()
    {
        return $this->belongsTo(Course::class );
    }

    public function user()
    {
        return $this->belongsTo(User::class );
    }

}
