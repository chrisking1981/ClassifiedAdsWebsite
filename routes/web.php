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
    return view('index');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::view('/place-ad', 'place-ad')->name('place-ad');
Route::view('/my-ads', 'my-ads')->name('my-ads');
Route::view('/notifications', 'notifications')->name('notifications');
Route::view('/settings', 'settings')->name('settings');
Route::view('/ad', 'ad')->name('ad');
Route::view('/search', 'search')->name('search');
Route::view('/category', 'category')->name('category');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
// logout 
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Route for the pattern "hoofdrubriek/subrubriek/advertentie_titel"
Route::get('{mainCategory}/{subCategory}/{adSlug}', 'AdController@show')->name('ad.show');
