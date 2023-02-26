<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Campaign;

class CampaignDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'campaign_id',
        'email_subject1',
        'email_body1',
        'use_custom_link1',
        'article1',
        'email_subject2',
        'email_body2',
        'use_custom_link2',
        'article2',
        'email_subject3',
        'email_body3',
        'use_custom_link3',
        'article3'
    ];

    protected $table = 'campaigns_details';


    /**
    * Get all of the post by Category
    */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class );
    }

}
