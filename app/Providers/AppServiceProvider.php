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
            $user      = auth()->user();
            $avatarImg = ( !empty( $user->avatar_img ) ) ? url( 'uploads/users/'.$user->avatar_img ) : asset('img/face.jpeg');

            $view->with([
                'instructionPopup' => $a ?? 0,
                'currentUser'      => $user ?? [],
                'avatarImg'        => $avatarImg ?? '',
            ]);

        });

    }
}
