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
//Route::get('/', 'CategoryProduct@add_category_product' );
Route::get('/trang-chu', 'HomeController@index');
//Danh muc san pham
Route::get('/danh-muc-san-pham/{category_id}', 'CategoryProductabc@show_category_home' );
Route::get('/nha-cung-cap/{category_id}', 'BrandProduct@show_brand_home' );
Route::get('/chi-tiet-san-pham/{product_id}', 'Product@detail_product' );



//Backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');


//Category
Route::get('/add-category', 'CategoryProductabc@add_category_product');
Route::get('/all-category', 'CategoryProductabc@all_category_product');
Route::get('/edit-category/{category_product_id}', 'CategoryProductabc@edit_category_product');
Route::get('/delete-category/{category_product_id}', 'CategoryProductabc@delete_category_product');
Route::get('/unactive-category-product/{category_product_id}', 'CategoryProductabc@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'CategoryProductabc@active_category_product');
Route::post('/save-category', 'CategoryProductabc@save_category_product');
Route::post('/update-category/{category_product_id}', 'CategoryProductabc@update_category_product');

//Brand Product

Route::get('/add-brand', 'BrandProduct@add_brand_product');
Route::get('/all-brand', 'BrandProduct@all_brand_product');
Route::get('/edit-brand/{brand_product_id}', 'BrandProduct@edit_brand_product');
Route::get('/delete-brand/{brand_product_id}', 'BrandProduct@delete_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}', 'BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}', 'BrandProduct@active_brand_product');
Route::post('/save-brand', 'BrandProduct@save_brand_product');
Route::post('/update-brand/{brand_product_id}', 'BrandProduct@update_brand_product');

///Product
Route::get('/add-product', 'Product@add_product');
Route::get('/all-product', 'Product@all_product');
Route::get('/edit-product/{product_id}', 'Product@edit_product');
Route::get('/delete-product/{product_id}', 'Product@delete_product');

Route::get('/unactive-product/{product_id}', 'Product@unactive_product');
Route::get('/active-product/{product_id}', 'Product@active_product');
Route::post('/save-product', 'Product@save_product');
Route::post('/update-product/{product_id}', 'Product@update_product');

//Giỏ hàng
Route::post('/save-cart', 'CartController@save_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/delete-cart/{rowId}', 'CartController@delete_cart');
Route::post('/update-cart-qty', 'CartController@update_cart_quantity');

///Thanh toán
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/save-checkout', 'CheckoutController@save_checkout');
Route::get('/completed', 'CheckoutController@payment');


