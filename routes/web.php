<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportPenjualanController;
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
Route::get('/product-detail/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('detail');

Route::get('/report', [ReportPenjualanController::class, 'index'])->name('report');
Route::get('/report/add', [ReportPenjualanController::class, 'create'])->name('report-add');

Route::get('/product', [ProductController::class, 'index'])->name('product-index');
Route::get('/product/add', [ProductController::class, 'create'])->name('product-add');
