<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('/shopping-cart', [App\Http\Controllers\HomeController::class, 'shoppingCart'])->name('shoppingCart');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
// Route::get('/admin',)
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

//admin
Route::post('create', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('product/create',[App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::get('product/list',[App\Http\Controllers\ProductController::class, 'list'])->name('product.list');
Route::get('product/show/{id}',[App\Http\Controllers\ProductController::class, 'show'])->name('product.view');
Route::delete('product/delete/{id}',[App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');
