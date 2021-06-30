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

// Rotta che fa visualizzare i dati di tutti i fumetti (Comics)
Route::get('/comics', 'ComicController@index')->name("comics.index");


//Rotta che mi salva i dati nel database di un nuovo fumetto
Route::get('/comics', 'ComicController@store')->name("comics.store");
// Rotta che mi fa creare un nuovo fumetto
Route::get('/comics/create', 'ComicController@create')->name("comics.create");


// Rotta che fa visualizzare un singolo fumetto
Route::get('/comics/{comic}', 'ComicController@show')->name("comics.show");

  
// Salva i dati dell update
Route::match(["PATCH" , "PUT"] , '/comics/{comic}', 'ComicController@update')->name("comics.index");
// Rotta che mi fa modificare un fumento esistente 
Route::get('/comics/{comic}/edit', 'ComicController@edit')->name("comics.edit");

//Cancella dumetto
Route::delete('/comics/{comic}', 'ComicController@destroy')->name("comics.destroy");


















