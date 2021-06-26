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

// SI RIFERISCE ALLA ROTTA "CREATE"
Route::get('/comics/create' , "ComicController@create")->name("comics.create");


// SI RIFERISCE ALLA ROTTA "STORE"
Route::post('/comics/store' , "ComicController@store")->name("comics.store");


// SI RIFERISCE ALLA ROTTA "INDEX" -> Ci mostra tutti i "comic" disponibili
Route::get('/comics/index' , "ComicController@index")->name("comics.index");


// SI RIFERISCE ALLA ROTTA "SHOW"
Route::get('/comics/{comic}' , "ComicController@show")->name("comics.show");






