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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);
//     return view('home');
// });

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'HomeController@index');
Route::get('/about', function () {
    return view('about');
});

// Route::get('/contact-us', function () {
//     return view('contact');
// });
Route::view('/contact-us', 'contact', ['name' => 'Taylor']);
Route::resource('showprofile', 'ShowProfile');
Route::get('contact', 'ContactController@contact');
Route::get('product/details/{product_id}', 'HomeController@productDetails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
