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

Route::get('/hello', [WelcomeController::class, 'index'])
    ->name('hello');

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories');

Route::get('/categories/{category}', [CategoryController::class, 'show'])
    ->name('categories.show');

Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

Route::get('/feedback', [FeedbackController::class, 'index'])
    ->name('feedback');

Route::post('/feedback/store', [FeedbackController::class, 'store'])
    ->name('feedbackstore');

Route::get('/order', [OrderController::class, 'index'])
    ->name('order');

Route::post('/order/store', [OrderController::class, 'store'])
    ->name('orderstore');
