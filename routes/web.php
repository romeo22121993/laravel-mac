<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Enums\Category;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* Routes with passwords */
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/forgot-password',        [UserController::class, 'forgotPassword' ])->middleware('guest')->name('password.forgot');
Route::post('/forgot-password',       [UserController::class, 'requestPassword'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [UserController::class, 'resetPasswordPage'])->middleware('guest')->name('password.reset');
Route::post('/reset-password',        [UserController::class, 'changePassword'])->middleware('guest')->name('password.update');
/* */


/** All Pages with User dashboards */
Route::group(['prefix'=> 'dashboard'], function(){
    Route::get('/logout', [UserController::class, 'logout'])->middleware('dashboard.main');
});

/** All Pages with Admin dashboards */
Route::group(['prefix'=> 'wpadmin'], function(){

});

/** All Pages without needed to log in */
Route::group(['middleware' => ['web', 'guest']], function () {

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/user', [UserController::class, 'index']);
Route::get('/greeting', function () {
    return 'Hello World';
});

//Route::redirect('/greeting', '/home', 301);
Route::view('/welcome/', 'set', [ 'environment' => 'aaa'] );
//Route::get('/users/{name?}', function ($name = 'John') {
//    return $name;
//});


Route::get('/users/{user}', function (User $user) {
    return $user->email;
});

Route::get('/categories/{category}', function (Category $category) {
//    var_dump( '$category', $category );
    return $category->value;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
