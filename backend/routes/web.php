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

Route::get('/', function () {
    return view('welcome');
})->name('root');

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ranking', 'RankingController@index')->name('ranking');

Route::get('/result', 'ResultController@index')->name('result');
Route::post('/result/submit', 'ResultController@submit')->name('result.submit');
