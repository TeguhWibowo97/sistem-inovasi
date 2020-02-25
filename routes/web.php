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
    return view('auth.login');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard','AdminController@index');
    
    Route::post('/question','QuestionController@store');
    Route::get('/question/edit/{question}','QuestionController@edit');
    Route::post('/question/edit/{question}','QuestionController@update');
    Route::get('/question/wr1question/{id_wr}','QuestionController@wr1question');
    Route::get('/question/wr2question/{id_wr}','QuestionController@wr2question');
    Route::get('/question/wr3question/{id_wr}','QuestionController@wr3question');
    Route::get('/question/wr4question/{id_wr}','QuestionController@wr4question');
    Route::get('/question/hapus/{question}','QuestionController@hapus');
    
    // Rekap Data
    Route::get('/rekap','RekapController@index');
});

