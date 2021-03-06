<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Registration
Route::get('register', 'PageController@home');
Route::post('register', 'Auth\AuthController@postRegister');

//Authentication
Route::get('login', 'PageController@home');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

//Static pages
Route::get('/', "PageController@home");
Route::get('home', "PageController@home");
Route::get('about', "PageController@about");

//Cardpacks
Route::resource("cardpacks", "CardpacksController");
Route::get("cardpacks/{cardpack}/export", "CardpacksController@export");
Route::post("cardpacks/{cardpack}/import", "CardpacksController@import");
Route::get("cardpacks/{cardpack}/learn", "CardpacksController@learn");
Route::post("cardpacks/{cardpack}/learn", "CardpacksController@learn");

//Cards
Route::post('cards', "CardsController@store");

Route::post('cards/delete', "CardsController@destroy");

//Cardpack table load
Route::get('cardpacks/{cardpack}/table', "CardpacksController@table");



