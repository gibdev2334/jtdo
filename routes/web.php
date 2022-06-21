<?php

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

// Route::get('/', 'HomeController@index');


// Main page
Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

// Site= Shop
// Route::get('/site', 'HomeController@site')->name('site.index');
Route::get('/site', 'SiteController@index')->name('site.index');

// Route::get('/site/single-vestige', 'HomeController@vestige')->name('site.show');
// Route::get('/site/single-vestige', 'SiteController@show')->name('site.show');
Route::get('/site/{vestige}', 'SiteController@show')->name('site.show');

// Reservation=Cart
Route::get('/reservation', 'HomeController@reservation')->name('reservation.index');


// Checkout
Route::get('/checkout', 'HomeController@checkout')->name('checkout.index');
Route::get('/checkout/success', 'HomeController@success')->name('checkout.success');

// Visites=Orders
Route::get('/visites', 'HomeController@visites')->name('visites');

// AUTHENTIFICATION 



