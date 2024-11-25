<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\HomeController@index'); 

Route::get('/trang-chu','App\Http\Controllers\HomeController@index');
Route::get('/product', function () {
    return view('pages.home');
   });
   Route::get('/product', function () {
    return view('pages.product');
   });
   Route::get('/news', function () {
    return view('pages.news');
   });
   Route::get('/contact', function () {
    return view('pages.contact');
   });

