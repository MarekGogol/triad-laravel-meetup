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

Route::get('/', 'AboutController@index')->seo();

Route::get('/blog', 'BlogController@index')->seo();
Route::get('/blog/{article}', 'BlogController@show');

Route::get('/authors', 'AuthorsController@index')->seo();
Route::post('/authors', 'AuthorsController@store');

Route::get('/products', 'ProductsController@index')->seo();