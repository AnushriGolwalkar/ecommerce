<?php

use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Dashboard
Route::get('/','CategoryController@dashboard');

//Category

Route::get('/Category/addcategory','CategoryController@addcategory');
Route::post('/Category/save','CategoryController@save');
Route::get('/Category/display','CategoryController@display');
Route::get('/Category/view{id}','CategoryController@view');
Route::get('/Category/edit{id}','CategoryController@edit');
Route::post('Category/update','CategoryController@update');
Route::get('/Category/delete{id}','CategoryController@delete');

//Product

Route::get('/Product/addproduct','ProductController@addproduct');
Route::post('Product/save','ProductController@save');
Route::get('/Product/display','ProductController@display');
Route::get('/Product/view{id}','ProductController@view');
Route::get('/Product/edit{id}','ProductController@edit');
Route::post('Product/update','ProductController@update');
Route::get('/Product/delete{id}','ProductController@delete');

//coupon
Route::get('/Coupon/addcoupon','CouponController@addcoupon');
Route::post('Coupon/save','CouponController@save');
Route::get('/Coupon/display','CouponController@display');
Route::get('/Coupon/view{id}','CouponController@view');
Route::get('/Coupon/edit{id}','CouponController@edit');
Route::post('Coupon/update','CouponController@update');
Route::get('/Coupon/delete{id}','CouponController@delete');


//Banner

Route::get('/Banner/addbanner','BannerController@addbanner');
Route::post('Banner/save','BannerController@save');
Route::get('/Banner/display','BannerController@display');
Route::get('/Banner/view{id}','BannerController@view');
Route::get('/Banner/edit{id}','BannerController@edit');
Route::post('Banner/update','BannerController@update');
Route::get('/Banner/delete{id}','BannerController@delete');


//Front

Route::get('index','FrontController@index');
Route::get('Front/productdetail/{id}','FrontController@productdetail');
Route::post('addtocart','FrontController@addtocart');
Route::get('cart','FrontController@cart');
Route::get('cart/delete/{id}','FrontController@delcartitem');
Route::get('cart/updatequantity/{id}/{product_quantity}','FrontController@updatequantity');

#checkout
Route::get('checkout','FrontController@checkout');

#place_order
Route::post('place_order','FrontController@place_order');

#Order Confirmation
Route::get('thanks','FrontController@orderconfirm');

#myaccount
Route::get('myaccount','FrontController@myaccount');

Route::get('user/login','UserController@login');
Route::post('loginsave','UserController@loginsave');

Route::get('user/register', 'UserController@register');
Route::post('regsave', 'UserController@regsave');

//Order display to Admin

Route::get('Order/display','OrderController@display');
    

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
