<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use http\Env\Request;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $user = auth()->user();

//            if ($userId = auth()->id()) {
//                $rating = Cache::rememberForever("rating_{$storeId}", function () use ($userId) {
//                    $res = Rating::where('user_id', $userId)->orderByDesc('created_at')->first(['stars', 'blocked_at']);
//                    return !empty($res) ? $res : 0;
//                });
//            }

            $view->with([
                'instructionPopup' => $a ?? 0,
                'currentUser' => $user ?? [],
                'storeUrl' => $store->domain ?? '',
            ]);

        });

    }
}
