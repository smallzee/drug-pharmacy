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
    return view('welcome');
});


Route::group(['namespace'=>'account','prefix'=>'auth'], function (){
    Route::resource("login", "LoginController");
});

Route::group(['namespace'=>'admin','prefix'=>'admin'], function (){

    Route::middleware(['auth'])->group(function (){

        Route::get('/dashboard', "AdminController@dashboard")->name('dashboard');
        Route::get('/users', "AdminController@users")->name('users');
        Route::get('/students', "AdminController@students")->name('students');

    });
});