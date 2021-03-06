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
    return view('startseite');
});

Route::get('/erfolgsgeschichten', function () {
    return view('erfolgsgeschichten');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/rezept1', function () {
    return view('recipe.rezept1');
});



Route::post('/benachrichtigungSpeichern', 'ShowController@validateandSave');

Route::get('/thankyou', function () {
    return view('notification.thankyou');

});

Route::get('/showall', 'ShowController@showAllContacts');
Route::get('/showcontact/{id}', 'ShowController@showContact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
