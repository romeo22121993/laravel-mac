<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Enums\Category;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Frontend\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

/* Routes with passwords */
Route::get('/logout',                 [UserAuthController::class, 'logout'])->middleware('auth');
Route::get('/forgot-password',        [UserAuthController::class, 'forgotPassword' ])->middleware('guest')->name('password.forgot1');
Route::post('/forgot-password',       [UserAuthController::class, 'requestPassword'])->middleware('guest')->name('password.email1');
Route::get('/reset-password/{token}', [UserAuthController::class, 'resetPasswordPage'])->middleware('guest')->name('password.reset1');
Route::post('/reset-password',        [UserAuthController::class, 'changePassword'])->middleware('guest')->name('password.update1');
/* */


/** All Pages with User dashboards */
Route::group(['prefix'=> 'dashboard'], function(){
    Route::get('/', [AdminController::class, 'mainPage'])->name('dashboard.main');
});

/** All Pages with Admin dashboards */
Route::group(['prefix'=> 'wpadmin', 'middleware' => ['auth', 'isAdmin']], function(){
    Route::get('/', [AdminController::class, 'mainPage'])->name('wpadmin.main');

    Route::get('/change-user-settings',       [ProfileController::class, 'changeSettings'])->name('wpadmin.change.profile');
    Route::post('/change-user-settings/{id}', [ProfileController::class, 'updateSettings'])->name('wpadmin.update.profile');
    Route::get('/change-password',            [ProfileController::class, 'changePassword'])->name('wpadmin.change.password');
    Route::post('/change-password/{id}',      [ProfileController::class, 'updatePassword'])->name('wpadmin.update.password');

    Route::group(['prefix'=> 'users'], function() {
        Route::get('/',             [UsersController::class, 'usersPage'])->name('wpadmin.users');
        Route::get('/add',          [UsersController::class, 'addUser'])->name('wpadmin.users.add');
        Route::post('/store',       [UsersController::class, 'StoreUser'])->name('wpadmin.users.store');
        Route::get('/edit/{id}',    [UsersController::class, 'EditUser'])->name('wpadmin.users.edit');
        Route::post('/update/{id}', [UsersController::class, 'UpdateUser'])->name('wpadmin.users.update');
        Route::get('/delete/{id}',  [UsersController::class, 'DeleteUser'])->name('wpadmin.users.delete');
    });

    Route::group(['prefix'=> 'posts'], function() {
        Route::get('/',             [PostsController::class, 'postsPage'])->name('wpadmin.posts');
        Route::get('/add',          [PostsController::class, 'addPost'])->name('wpadmin.posts.add');
        Route::post('/store',       [PostsController::class, 'StorePost'])->name('wpadmin.posts.store');
        Route::get('/edit/{id}',    [PostsController::class, 'EditPost'])->name('wpadmin.posts.edit');
        Route::post('/update/{id}', [PostsController::class, 'UpdatePost'])->name('wpadmin.posts.update');
        Route::get('/delete/{id}',  [PostsController::class, 'DeletePost'])->name('wpadmin.posts.delete');
        Route::get('/category/{id}',  [PostsController::class, 'postsPageByCategory'])->name('wpadmin.posts.by,categories');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [PostsController::class, 'postsCategoryPage'])->name('wpadmin.posts.categories');
            Route::get('/add',          [PostsController::class, 'addPostCategory'])->name('wpadmin.posts.categories.add');
            Route::post('/store',       [PostsController::class, 'StorePostCategory'])->name('wpadmin.posts.categories.store');
            Route::get('/edit/{id}',    [PostsController::class, 'EditPostCategory'])->name('wpadmin.posts.categories.edit');
            Route::post('/update/{id}', [PostsController::class, 'UpdatePostCategory'])->name('wpadmin.posts.categories.update');
            Route::get('/delete/{id}',  [PostsController::class, 'DeletePostCategory'])->name('wpadmin.posts.categories.delete');
        });
    });

});

/** All Pages without needed to log in */
Route::group(['middleware' => ['web']], function () {
    Route::get('/', [FrontendController::class, 'mainPage'])->name('home');
    Route::get('/platform', [FrontendController::class, 'platformPage'])->name('platform');
    Route::get('/sign-up',  [FrontendController::class, 'signUpPage'])->name('signup');
    Route::get('/podcast',  [FrontendController::class, 'signUpPage'])->name('podcast');
    Route::get('/blog',     [FrontendController::class, 'signUpPage'])->name('blog');
    Route::get('/contact',  [FrontendController::class, 'signUpPage'])->name('contact');
});


//Route::get('/users/{name?}', function ($name = 'John') {
//    return $name;
//});

/*
Route::fallback(function () {
    return '404 Page!!';
});

Route::get('/users/{user}', function (User $user) {
    return $user->email;
});

Route::get('/categories/{category}', function (Category $category) {

    return $category->value;
});
*/

