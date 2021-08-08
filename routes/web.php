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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Controller@frontend');
// Route::get('/dashboard', 'Controller@dashboard');

//addCategory Controllers
Route::get('/addCategory','addcategoryController@addcategory');
Route::post('/categoryPost',"addcategoryController@categoryPost");
Route::get('removeCategory/{category_id}','addcategoryController@removeCategory');
Route::get('restoreCategory/{category_id}','addcategoryController@restoreCategory');
Route::get('updateCategory/{category_id}','addcategoryController@updateCategory');
Route::post('updateCategoryPost','addcategoryController@updateCategoryPost');
Route::get('deleteCategory/{category_id}','addcategoryController@deleteCategory');


//profile Controllers
Route::get('profile','profileController@profile');
Route::post('editprofilePost','profileController@editprofilePost');
Route::post('editprofilepasswordPost','profileController@editprofilepasswordPost');

// product Controllers
Route::get('product','productController@product');
Route::post('productPost','productController@productPost');

// frontendController
Route::get('shop',"frontendController@shop");
Route::get('productDetails/{product_id}',"frontendController@productDetails");
Route::get('categoryDetails/{category_id}','frontendController@categoryDetails');

//cart Controllers
Route::post('addtocart','cartController@addtocart');
Route::get('deleteCart/{cart_id}','cartController@deleteCart');
Route::get('cart','cartController@cart');
Route::get('updateCartPage','cartController@updateCartPage');
Route::post('updateCart','cartController@updateCart');

//coupon Controller
Route::get('coupon','couponController@coupon');
Route::post('couponPost','couponController@couponPost');
//for coupon
Route::get('coupon','couponController@couponfunction');
Route::get('coupon/{coupon_name}','couponController@couponfunction');

// checkoutController
Route::post('checkout','checkoutController@checkout');
Route::post('checkoutPost','checkoutController@checkoutPost');

Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

//customerRegiter Controller
Route::get('customerReg',"customerRegister@customerReg");
Route::post('customerRegistrationPost',"customerRegister@customerRegistrationPost");


Route::get('/index','Controller@index');
