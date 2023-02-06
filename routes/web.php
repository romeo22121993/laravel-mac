<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Enums\Category;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\PostsCategoriesController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PostsController as FrontendPostsController;

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
        Route::get('/category/{id}', [PostsController::class, 'postsPageByCategory'])->name('wpadmin.posts.by.categories');

        Route::group(['prefix'=> 'categories'], function() {
            Route::get('/',             [PostsCategoriesController::class, 'postsCategoryPage'])->name('wpadmin.posts.categories');
            Route::get('/add',          [PostsCategoriesController::class, 'addPostCategory'])->name('wpadmin.posts.categories.add');
            Route::post('/store',       [PostsCategoriesController::class, 'StorePostCategory'])->name('wpadmin.posts.categories.store');
            Route::get('/edit/{id}',    [PostsCategoriesController::class, 'EditPostCategory'])->name('wpadmin.posts.categories.edit');
            Route::post('/update/{id}', [PostsCategoriesController::class, 'UpdatePostCategory'])->name('wpadmin.posts.categories.update');
            Route::get('/delete/{id}',  [PostsCategoriesController::class, 'DeletePostCategory'])->name('wpadmin.posts.categories.delete');
        });
    });

    Route::group(['prefix'=> 'pages'], function() {
        Route::get('/',             [PagesController::class, 'pagesPage'])->name('wpadmin.pages');
        Route::get('/add',          [PagesController::class, 'addPage'])->name('wpadmin.pages.add');
        Route::post('/store',       [PagesController::class, 'StorePage'])->name('wpadmin.pages.store');
        Route::get('/edit/{id}',    [PagesController::class, 'EditPage'])->name('wpadmin.pages.edit');
        Route::post('/update/{id}', [PagesController::class, 'UpdatePage'])->name('wpadmin.pages.update');
        Route::get('/delete/{id}',  [PagesController::class, 'DeletePage'])->name('wpadmin.pages.delete');
    });

    Route::group(['prefix'=> 'contacts'], function() {
        Route::get('/',             [ContactsController::class, 'indexPage'])->name('wpadmin.contacts');
        Route::get('/show/{id}',    [ContactsController::class, 'showContact'])->name('wpadmin.contacts.show');
        Route::get('/delete/{id}',  [ContactsController::class, 'DeleteContact'])->name('wpadmin.contacts.delete');
    });

});

/** All Pages without needed to log in */
Route::group(['middleware' => ['web']], function () {
    Route::get('/',         [FrontendController::class, 'mainPage'])->name('home');
    Route::get('/platform', [FrontendController::class, 'platformPage'])->name('platform');
    Route::get('/sign-up',  [FrontendController::class, 'signUpPage'])->name('signup');
    Route::get('/podcast',  [FrontendController::class, 'podcastPage'])->name('podcast');
    Route::get('/blog',     [FrontendController::class, 'blogPage'])->name('blog');
    Route::get('/contact',  [FrontendController::class, 'contactPage'])->name('contact');
    Route::get('/about',    [FrontendController::class, 'aboutPage'])->name('about');

    // Ajax requests for frontend pages
    Route::group(['prefix'=> 'ajax'], function(){

        Route::post('/contactForm',     [ContactController::class, 'contactFormAjax']);
        Route::post('/loadPostsByAjax', [FrontendPostsController::class, 'loadPostsByAjax']);

        // Add to Cart Store Data
//        Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);
//
//        // Get Data from mini cart
//        Route::get('/product/mini/cart/',    [CartController::class, 'AddMiniCart']);

    });

});


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

