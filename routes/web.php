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
    return redirect('/welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/services', 'ServiceController@index')->name('service');

//Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

Route::get('/contact', 'ContactController@index')->name('contactpage');
Route::post('/contact', 'ContactController@message')->name('contact');

Route::post('/nieuwsbrief', 'ContactController@newsletter')->name('newsletter');

Auth::routes(['verify' => true, 'register' => false]);

// Dashboard
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/orders', 'HomeController@orders')->name('orders');

Route::get('/subscriptions', 'HomeController@subscriptions')->name('subs');

Route::get('/workers', 'HomeController@workers')->name('workers');

Route::get('/docs', 'HomeController@docs')->name('docs');

Route::get('/alerts', 'HomeController@alerts')->name('alerts');
