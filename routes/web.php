<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Enums\Category;
use App\Http\Controllers\UserController;

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

Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');

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
