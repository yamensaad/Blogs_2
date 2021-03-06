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


Route::get('/','pagesController@index');  
Route::get('about','pagesController@index')->name('aboutpage');
Route::get('contact','pagesController@contact');
Route::resource('posts','PostController'); 
Route::post('/dosend','pagesController@dosend');
Route::post('/comments/{slug}','CommentsController@store')->name('comments.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

