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


Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/about', function () {
    return view('about');
});



Route::group(['middleware' => ['langue','lien']], function () {
    //
    Route::get('/', function () {

        return view('accueil');
    });
    Route::get('/accueil','HomeCtrl@accueil');
    Route::get('/about','AboutCtrl@about');
    Route::get('/services','ServicesCtrl@services');
    Route::get('/contacts','ContactsCtrl@contacts');
    /*route pour la modification de la langue*/
    Route::get('langue_fr', 'InternationalisationCtrl@change_langue_fr');
    Route::get('langue_en', 'InternationalisationCtrl@change_langue_en');

  });