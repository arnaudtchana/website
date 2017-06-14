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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/accueil','HomeCtrl@accueil');
Route::get('/about','AboutCtrl@about');
Route::get('/services','ServicesCtrl@services');
Route::get('/contacts','ContactsCtrl@contacts');