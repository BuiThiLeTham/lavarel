<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\HomeController@index'); 

Route::get('/trang-chu','App\Http\Controllers\HomeController@index');

