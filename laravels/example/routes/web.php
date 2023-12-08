<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\ProductController;
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

Route::get('/about', function () {
    return view('about');
});
// Route::view('about', 'about');

Route::get('/contact', function () {
    return view('contact');
});
// Route::get('users', 'Users@index');
Route::get('users/{user}', [Users::class, 'index']);
Route::get('product', [productController::class, 'index'])->name('product.index');
Route::get('product/create', [productController::class, 'create'])->name('product.create');
Route::post('product', [productController::class, 'store'])->name('product.store');
Route::get('product/{product}/edit', [productController::class, 'edit'])->name('product.edit');
Route::put('product/{product}/update', [productController::class, 'update'])->name('product.update');
Route::delete('product/{product}/destroy', [productController::class, 'destroy'])->name('product.destroy');