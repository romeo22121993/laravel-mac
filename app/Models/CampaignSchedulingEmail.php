<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Campaign;

class CampaignSchedulingEmail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'campaign_id',
        'campaign_detail_id',
        'user_id',
        'email_subject',
        'email_body',
        'user_list',
        'status',
        'statistics',
        'sending_iteration',
        'count_get_users',
        'sending_time',
    ];

    protected $table = 'campaign_scheduling_emails';


    /**
    * Get all of the post by Category
    */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class );
    }

}
