<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;

class Campaign extends Model
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
        'img',
        'author_id',
        'original_type',
        'doc_file',
        'pdf_file',
    ];

    protected $table = 'campaigns';


    /**
     * Get all of the categories by Post
     */
    public function categories()
    {
        return $this->belongsToMany(CampaignCategory::class, 'campaigns_and_cats', 'campaign_id', 'cat_id');
    }

    /**
     * Get all of the categories by Post
     */
    public function topics()
    {
        return $this->belongsToMany(CampaignTopic::class, 'campaigns_and_topics', 'campaign_id', 'topic_id');
    }

    /**
     * Get all of the categories by Post
     */
    public function details()
    {
        return $this->hasOne(CampaignDetail::class);
    }


}
