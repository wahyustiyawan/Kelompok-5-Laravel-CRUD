<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/','\App\Http\Controllers\BookController@home');



Route::get('/tabel','\App\Http\Controllers\BookController@index');

Route::get('/cari/{id}','\App\Http\Controllers\BookController@cari');

Route::post('/tambah','\App\Http\Controllers\BookController@tambah');

Route::get('/hapus/{id}','\App\Http\Controllers\BookController@hapus');

Route::get('/show/{id}','\App\Http\Controllers\BookController@show');

Route::post('/edit','\App\Http\Controllers\BookController@edit');



