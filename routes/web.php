<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
   Route::get('/admin','App\Http\Controllers\AdminController@index');
   Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboar
   d');

