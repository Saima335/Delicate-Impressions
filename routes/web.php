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

Route::get('/', 'App\Http\Controllers\UserController@ViewHome');

//                              About Us
Route::get('/AboutUs', 'App\Http\Controllers\UserController@AboutUs');


//                             Contact Us
Route::get('/ContactUs', 'App\Http\Controllers\UserController@ContactUs');
Route::post('/ContactUS','App\Http\Controllers\UserController@contactform');


//                                Home
Route::get('/Home', 'App\Http\Controllers\UserController@ViewHome',);
Route::get('/Home1/{id}','App\Http\Controllers\UserController@CartNewArrivals');


//                               Admin
Route::post('/Admin','App\Http\Controllers\UserController@Productstore');
Route::get('/Admin', 'App\Http\Controllers\UserController@AdminDashboards',);
Route::get('deleteproduct/{id}','App\Http\Controllers\UserController@DeleteProduct');
Route::get('/UpdateProduct', 'App\Http\Controllers\UserController@UpdateProd');
Route::post('UpdateProduct/{id}','App\Http\Controllers\UserController@Displayupdate');
Route::get('update/{id}', 'App\Http\Controllers\UserController@UpdateProduct');
Route::get('delete/{id}','App\Http\Controllers\UserController@DeleteUser');
Route::get('/live_search/action', 'App\Http\Controllers\LiveSearch@action')->name('live_search.action');
Route::get('/live_search/action2', 'App\Http\Controllers\LiveSearch@Contact')->name('live_search.action2');
Route::get('/SearchCustomers', 'App\Http\Controllers\UserController@SearchCustomers');
Route::get('/ViewContactUs', 'App\Http\Controllers\UserController@ViewContactUs');


//                                   Cart
Route::get('/Cart', 'App\Http\Controllers\UserController@ViewCart',);
Route::get('deleteproductcart/{id}','App\Http\Controllers\UserController@DeleteProductcart');
Route::get('Checkout','App\Http\Controllers\UserController@Checkoutcart');
Route::post('/UpdateQuantity/{id}', 'App\Http\Controllers\UserController@UpdateQuantity');



//                              Browse and Collections

Route::get('/Browse', 'App\Http\Controllers\UserController@Browse');
Route::get('/BrowseCart/{id}','App\Http\Controllers\UserController@BrowseCart');

Route::get('/SummerCollection', 'App\Http\Controllers\UserController@SummerCollection');
Route::get('/SummerCollectionCart/{id}','App\Http\Controllers\UserController@SummerCollectionCart');

Route::get('/WinterCollection', 'App\Http\Controllers\UserController@WinterCollection');
Route::get('/WinterCollectionCart/{id}','App\Http\Controllers\UserController@WinterCollectionCart');

Route::get('/BridalCollection', 'App\Http\Controllers\UserController@BridalCollection');
Route::get('/BridalCollectionCart/{id}','App\Http\Controllers\UserController@BridalCollectionCart');


//                             Sign Up and Login
Route::get('/Signup', 'App\Http\Controllers\UserController@Signup');
Route::post('/Signup', 'App\Http\Controllers\UserController@store');

Route::get('/Login', 'App\Http\Controllers\UserController@Login');
Route::post('/login', 'App\Http\Controllers\UserController@UserLogin');
Route::get('/Login2', 'App\Http\Controllers\UserController@logout');


