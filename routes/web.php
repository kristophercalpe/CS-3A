<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Getdata;
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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/adminpanel', [AdminController::class,'index']);

Route::get('/profile', [UserProfileController::class,'index']);

Route::get('/register', [RegisterController::class,'index']);

Route::get('/', function () {
    return View::make('pages.welcome');
});

Route::get('/home', function () {
    return view('post');
});

Route::get('/post', function () {
    return View::make('pages.post');
});


Route::get('/view', function () {
    return view('view');
});

Route::resource('admin', App\Http\Controllers\AdminController::class);
Route::resource('user', App\Http\Controllers\UserProfileController::class);
Route::resource('register', App\Http\Controllers\RegisterController::class);

Route::get('adminlogin', [AdminController::class,'adminPage']);
Route::post('adminposts', [AdminController::class,'adminloginFinal']);

Route::get('login', [UserProfileController::class,'userPage']);
Route::post('posts', [UserProfileController::class,'login']);

Route::get('/admin-delete/{admin_id}',[AdminController::class,'delete']);
Route::get('/user-delete/{user_id}',[UserProfileController::class,'delete']);


Route::get('/post', function () {
    return view('post');
});

Route::post('post',[UserController::class,'getData']);
Route::post('post',[UserController::class,'store']);
Route::get('post',[Getdata::class,'getdatabase']);

