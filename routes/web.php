<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/adminlogin', function () {
    return view('admin');
});

Route::get('/adminpanel', [AdminController::class,'index']);

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/', function () {
    return View::make('pages.welcome');
});

Route::get('/changepassword', function () {
    return view('changepassword');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/changepassword2', function () {
    return view('changepassword2');
});

Route::resource('admin', App\Http\Controllers\AdminController::class);

Route::post('/admin-store',[AdminController::class,'store']);

Route::get('/admin-delete/{admin_id}',[AdminController::class,'delete']);

Route::post('/admin-login',[AdminController::class,'login']);
