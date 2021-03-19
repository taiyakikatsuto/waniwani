<?php

use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\registerArgumentsSet;

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

Route::redirect('/', '/ranking')->name('root');
Route::redirect('/home', '/ranking')->name('home');


Auth::routes([
    'register' => false
]);

Route::get('/login/backend', 'Auth\LoginController@loginBackend')
    ->middleware('login.backend')->name('login_backend');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ranking', 'RankingController@index')->name('ranking');

Route::get('/result', 'ResultController@index')->name('result');
Route::post('/result', 'ResultController@submit')->name('result.submit');
