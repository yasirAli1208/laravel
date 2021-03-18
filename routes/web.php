<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsCall;
use App\Http\Controllers\UserStore;
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
Route::get('/about', [ViewsCall::class,'about'])->name('about');
Route::get('/account', [ViewsCall::class,'account'])->name('account');
Route::post('/account', [UserStore::class,'storeuser']);
Route::get('/blog', [ViewsCall::class,'blog'])->name('blog');
Route::get('/cart', [ViewsCall::class,'cart'])->name('aboucartt');
Route::get('/checkout', [ViewsCall::class,'checkout'])->name('checkout');
Route::get('/comming', [ViewsCall::class,'comming'])->name('comming');
Route::get('/contact', [ViewsCall::class,'contact'])->name('contact');
Route::get('/error', [ViewsCall::class,'error'])->name('error');
Route::get('/', [ViewsCall::class,'index'])->name('index');
Route::get('/order', [ViewsCall::class,'order'])->name('order');
Route::get('/product-view', [ViewsCall::class,'productView'])->name('productView');
Route::get('/product', [ViewsCall::class,'product'])->name('product');
