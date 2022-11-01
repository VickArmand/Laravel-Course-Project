<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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
    return view('pages.blog');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/about', [PagesController::class, 'about'])->name('home.about'); 

Route::get('/services', [PagesController::class, 'services'])->name('home.services'); 

Route::get('/contact', [PagesController::class, 'contact'])->name('home.contact'); 

Route::get('/about', [PagesController::class, 'about'])->name('home.about'); 

Route::resource('/blog', PostsController::class);



Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'redirect'])->name('dashboard');
