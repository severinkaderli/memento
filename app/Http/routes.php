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
Route::get('contact', "PageController@contact");

//Cardpacks
Route::resource("cardpacks", "CardpacksController");
Route::get("cardpacks/{cardpack}/export", "CardpacksController@export");
Route::post("cardpacks/{cardpack}/cards", "CardsController@store");



