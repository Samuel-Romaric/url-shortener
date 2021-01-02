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

/* The pricipal route of the url shortener */
Route::get('/', 'UrlsController@index')->name('home');

Route::post('/', 'UrlsController@store');

/* The secondary route of this app */
Route::get('about', 'PagesController@about')->name('about');

Route::get('services', 'PagesController@services')->name('services');

Route::get('contact', 'PagesController@contact')->name('contact');

Route::post('contact', 'PagesController@send_msg')->name('contact');

/* Redirection de vers l'url d'origine */
Route::get('/{shortened}', 'UrlsController@show');
