<?php

namespace App\Providers;

use App\Events\ArticleCreated;
use App\Events\CampaignCreated;
use App\Listeners\ArticleEmailAdmin;
use App\Listeners\ArticleEmailUser;
use App\Listeners\CampaignEmailAdmin;
use App\Listeners\CampaignEmailUser;
use App\Models\Order;
use App\Observers\OrderObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Models\User;
use App\Observers\UserObserver;
use App\Models\Post;
use App\Observers\PostObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ArticleCreated::class => [
            ArticleEmailAdmin::class,
            ArticleEmailUser::class
        ],
        CampaignCreated::class => [
            CampaignEmailAdmin::class,
            CampaignEmailUser::class
        ],
        'App\Events\NewChatMessage' => [
            'App\Listeners\SendChatNotification'
        ],
        'App\Events\NewChatRoom' => [
            'App\Listeners\SendRoomNotification'
        ],
        'App\Events\NewGame' => [
            'App\Listeners\NewGameListener',
        ],
        'App\Events\Play' => [
            'App\Listeners\PlayListener',
        ],
        'App\Events\GameOver' => [
            'App\Listeners\GameOverListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Post::observe(PostObserver::class);
        Order::observe(OrderObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
