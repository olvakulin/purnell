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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', function()
{
    return  view('_home');
});

Route::get('/', function()
{
    return  view('_home');
});
Route::get('about', function()
{
    return  view('_about');
});
Route::get('service', function()
{
    return  view('_service');
});
Route::get('pricing', function()
{
    return  view('_pricing');
});
Route::get('contact', function()
{
    return  view('_contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
