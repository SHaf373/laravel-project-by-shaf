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
    return view('main');
});

Route::get('/studentlogin', function () {
    return view('stmerit');
    
});



Route::get('/adminlogin', function () {
    return view('admin/index');
});

Route::get('/index', function () {
    return view('admin/index');
});


Route::get('/logout', function () {
    return view('main');
});

Route::get('/studentList', function () {
    return view('admin/studentList');
});