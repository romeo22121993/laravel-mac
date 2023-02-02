<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Enums\Category;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;

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
    Route::get('/', [AdminController::class, 'mainPage'])->name('dashboard.main');
});

/** All Pages with Admin dashboards */
Route::group(['prefix'=> 'wpadmin'], function(){
    Route::get('/', [AdminController::class, 'mainPage'])->name('wpadmin.main');

    Route::get('/change-user-settings',  [UsersController::class, 'changeSettings'])->name('wpadmin.change.profile');
    Route::post('/change-user-settings', [UsersController::class, 'updateSettings'])->name('wpadmin.update.profile');
    Route::get('/change-password',       [UsersController::class, 'changePassword'])->name('wpadmin.change.password');
    Route::post('/change-password/{id}', [UsersController::class, 'updatePassword'])->name('wpadmin.update.password');

    Route::group(['prefix'=> 'users'], function() {
        Route::get('/',             [UsersController::class, 'usersPage'])->name('wpadmin.users');
        Route::get('/add',          [UsersController::class, 'addUser'])->name('wpadmin.users.add');
        Route::post('/store',       [UsersController::class, 'StoreUser'])->name('wpadmin.users.store');
        Route::get('/edit/{id}',    [UsersController::class, 'EditUser'])->name('wpadmin.users.edit');
        Route::post('/update/{id}', [UsersController::class, 'UpdateUser'])->name('wpadmin.users.update');
        Route::get('/delete/{id}',  [UsersController::class, 'DeleteUser'])->name('wpadmin.users.delete');
    });

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
