<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/hello', [WelcomeController::class, 'index'])->name('hello');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/show/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/create/', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::post('/categories/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::post('/categories/delete/{category}', [CategoryController::class, 'delete'])->name('categories.delete');

Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks.index');
Route::get('/feedbacks/show/{feedback}', [FeedbackController::class, 'show'])->name('feedbacks.show');
Route::get('/feedbacks/create/', [FeedbackController::class, 'create'])->name('feedbacks.create');
Route::get('/feedbacks/edit/{feedback}', [FeedbackController::class, 'edit'])->name('feedbacks.edit');
Route::post('/feedbacks/store', [FeedbackController::class, 'store'])->name('feedbacks.store');
Route::post('/feedbacks/update/{feedback}', [FeedbackController::class, 'update'])->name('feedbacks.update');
Route::post('/feedbacks/delete/{feedback}', [FeedbackController::class, 'delete'])->name('feedbacks.delete');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/show/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/create/', [NewsController::class, 'create'])->name('news.create');
Route::get('/news/edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
Route::post('/news/update/{news}', [NewsController::class, 'update'])->name('news.update');
Route::post('/news/delete/{news}', [NewsController::class, 'delete'])->name('news.delete');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/show/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/orders/create/', [OrderController::class, 'create'])->name('orders.create');
Route::get('/orders/edit/{order}', [OrderController::class, 'edit'])->name('orders.edit');
Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');
Route::post('/orders/update/{order}', [OrderController::class, 'update'])->name('orders.update');
Route::post('/orders/delete/{order}', [OrderController::class, 'delete'])->name('orders.delete');
