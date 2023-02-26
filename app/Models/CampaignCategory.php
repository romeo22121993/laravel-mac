<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class CampaignCategory extends Model
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

    protected $table = 'campaigns_cats';

    /**
    * Get all of the post by Category
    */
    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'campaigns_and_cats',  'cat_id', 'campaign_id' );
    }

}
