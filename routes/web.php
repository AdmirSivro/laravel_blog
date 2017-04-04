<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/the_new_view', function () {
    return view('the_new_view');
});

Route::get('/master', function () {
    return view('master');
});


Route::get('/clanak', function () {
    return view('clanak');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/pocetna','TestController@mojaPrvaMetoda');

Route::get('/2','TestController@mojaDrugaMetoda');
