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
    return view('index');
});


Route::group(['namespace'=>'account','prefix'=>'auth'], function (){
    Route::resource("login", "LoginController");
});

Route::group(['namespace'=>'admin','prefix'=>'admin'], function (){

    Route::middleware(['auth'])->group(function (){

        Route::get('/dashboard', "AdminController@dashboard")->name('dashboard');
        Route::get('/users', "AdminController@users")->name('users');

        Route::get('/category', "ProductController@category")->name('category');
        Route::post('/create_new_category', "ProductController@create_new_category")->name('create_new_category');
        Route::get('/edit-category/{category}', "ProductController@edit_category")->name('edit_category');
        Route::post('/update_category', "ProductController@update_category")->name('update_category');

        Route::post('/create_new_drug_type', "ProductController@create_new_drug_type")->name('create_new_drug_type');
        Route::get('/edit-drug-type/{drug_type}', "ProductController@edit_drug_type")->name('edit_drug_type');
        Route::post('/update_drug_type', "ProductController@update_drug_type")->name('update_drug_type');
        Route::get('/drug-type', "ProductController@drug_type")->name('drug_type');



        Route::get('/students', "StudentController@students")->name('students');

        Route::post('/create_new_student', "StudentController@create_new_student")->name('create_new_student');


    });
});