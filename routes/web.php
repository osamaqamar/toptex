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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/contact', function () {
    return view('contact');
});
//Route::get('/detail', function () {
//    return view('detail');
//});


Auth::routes();
Route::resource('order',\App\Http\Controllers\OrderController::class);
Route::get('/{id}', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/detail/edit/{id}', [App\Http\Controllers\HomeController::class, 'detailEdit'])->name('detail.edit');


Route::group(['middleware' => 'auth'], function () {
Route::resource('product',\App\Http\Controllers\ProductController::class);
Route::resource('category',\App\Http\Controllers\CatogeryController::class);
Route::resource('all-order',\App\Http\Controllers\AllOrderController::class);

});
