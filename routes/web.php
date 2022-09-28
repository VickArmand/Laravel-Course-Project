<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.index');
});
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('home.about'); 

Route::get('/services', [App\Http\Controllers\PagesController::class, 'services'])->name('home.services'); 

Route::get('/blogs', [App\Http\Controllers\PagesController::class, 'blogs'])->name('home.blogs'); 

Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('home.contact'); 
