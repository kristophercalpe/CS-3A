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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminpanel', function () {
    return view('adminpanel');
});

Route::get('/edit', function () {
    return view('edit');
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

Route::post('/admin-store',[AdminController::class,'store']);
