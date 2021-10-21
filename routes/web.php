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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('initieel');
    // return view('initieelModM');
    // return view('initieelLOeB');
});

Route::get('/songs', function () {
    return view('songs.index');
});

Route::get('/nieuwe_site', function () {
    return view('nieuw.nieuwe_site');
});


Route::get('/login', function () {
    return view('nieuw.empty');
});

Route::get('/actualiteiten', 'App\Http\Controllers\ActualiteitenController@index')->name('home');

// Route::get('/repertoire', 'App\Http\Controllers\RepertoireController@index');
Route::get('/repertoire', function () {
    return view('nieuw.empty');
});


Route::get('/samenstelling', function () {
    return view('nieuw.empty');
});

Route::get('/optredens', function () {
    return view('nieuw.empty');
});

Route::get('/commissies', function () {
    return view('nieuw.commissies');
});

Route::get('/liedjesavond', function () {
    return view('nieuw.empty');
});

Route::get('/notenschrift', function () {
    return view('nieuw.notenschrift');
});

Route::get('/links', function () {
    return view('nieuw.empty');
});

Route::get('/ModM', function () {
    return view('nieuw.empty');
});

Route::get('/ZEV_Interactief', function () {
    return view('nieuw.empty');
});

Route::get('/contact', function () {
    return view('nieuw.contact');
});

Route::get('phpinfo', function () {
    return view('phpinfo');
});
