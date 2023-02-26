<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class CampaignTopic extends Model
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

    protected $table = 'campaigns_topics';

    /**
    * Get all of the post by Category
    */
    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'campaigns_and_topics',  'topic_id', 'campaign_id' );
    }

}
