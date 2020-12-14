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

/* Generateur de disque dure */
Route::post('/', 'UrlsController@generate_url');

/* Redirection de vers l'url d'origine */
Route::get('/{shortened}', 'UrlsController@redirect_to_url');

/* The secondary route of the url shortener */
Route::get('about', 'UrlsController@about')->name('about');
