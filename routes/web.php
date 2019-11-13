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
//frontend

Route::get('/', 'HomeController@index' );
Route::get('/trang-chu', 'HomeController@index');




//Backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');


//Category
Route::get('/add-category', 'CategoryProduct@add_category_product');
Route::get('/all-category', 'CategoryProduct@all_category_product');
Route::post('/save-category', 'CategoryProduct@save_category_product');
