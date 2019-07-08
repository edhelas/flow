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

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('subjects', 'SubjectController');
    Route::get('subjects/{shooting}/votes/up', 'SubjectVoteController@up')->name('subjects.votes.up');
    Route::get('subjects/{shooting}/votes/down', 'SubjectVoteController@down')->name('subjects.votes.down');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
