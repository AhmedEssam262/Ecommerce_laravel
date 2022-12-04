<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\cartController;
use App\Http\Controllers\extraAdminController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\paymentController;
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
Route::get('/',[homeController::Class,'index'])->middleware('user');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[homeController::Class,'redirect'])->name('userHome')->middleware('verified','auth');

Route::get('/show_category',[admincontroller::Class,'show_category'])->middleware('admin');
Route::post('/add_category',[admincontroller::Class,'add_category'])->name('cat')->middleware('admin');
Route::get('show_category/delete/{id}',[admincontroller::Class,'del_category'])->middleware('admin');


Route::get('/show_product',[admincontroller::Class,'show_products'])->name('show_products')->middleware('admin');
Route::get('/order',[admincontroller::Class,'order'])->name('order')->middleware('admin');
Route::get('/order/delivered/{id}',[admincontroller::Class,'delivered'])->name('delivered')->middleware('admin');
Route::get('/order/create_pdf/{id}',[admincontroller::Class,'create_pdf'])->name('create_pdf')->middleware('admin');
Route::get('/order/send_email/{id}',[extraAdminController::Class,'send_email'])->name('send_email')->middleware('admin');
Route::get('/order/send_email/{id}',[extraAdminController::Class,'send_email'])->name('send_email')->middleware('admin');
Route::get('order/search',[extraAdminController::Class,'search_order'])->name('search_order')->middleware('admin');
Route::post('order/send_email_info/{id}',[extraAdminController::Class,'send_email_info'])->name('send_email_info');
Route::get('/add_product',[admincontroller::Class,'add_product'])->name('add_product')->middleware('admin');
Route::post('/submit_product',[admincontroller::Class,'submit_product'])->name('submit_product')->middleware('admin');
Route::get('show_product/delete/{id}',[admincontroller::Class,'del_product'])->middleware('admin');
Route::get('show_product/update/{id}',[admincontroller::Class,'update_product'])->middleware('admin');
Route::post('submit_update_product/{id}',[admincontroller::Class,'submit_update_product'])->name('submit_update_product')->middleware('admin');

/****************************************************************
 * **********************      User   ***************************
 ****************************************************************
 ****************************************************************/
Route::get('/product_details/{id}',[homeController::Class,'product_details']);
Route::post('/add_cart/{id}',[cartController::Class,'add_cart'])->middleware('auth','user');
Route::get('/user_cart',[cartController::Class,'user_cart'])->middleware('auth','user')->name('cart');
Route::get('/user_order',[cartController::Class,'user_order'])->middleware('auth','user')->name('user_order');
Route::get('user_cart/delete/{id}',[cartController::Class,'del_from_cart']);
Route::get('user_order/delete/{id}',[cartController::Class,'cancel_order']);
Route::get('user_cart/pay_cash',[paymentController::Class,'pay_cash']);
Route::get('user_cart/stripe/{total_price}',[paymentController::Class,'stripe']);
Route::post('user_cart/stripePost/{total_price}',[paymentController::Class,'stripePost'])->name('stripe.post');
Route::post('comment',[homeController::Class,'comment'])->name('comment')->middleware('auth')->name('user_order');
Route::post('reply',[homeController::Class,'reply'])->name('reply')->middleware('auth')->name('user_order');
Route::get('comments',[homeController::Class,'comments'])->name('comments')->middleware('auth')->name('user_order');
Route::get('about',[homeController::Class,'about'])->name('about');



