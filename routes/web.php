<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/hello', [WelcomeController::class, 'index'])->name('hello');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/show/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/create/', [CategoryController::class, 'create'])->name('categories.create')->middleware(['auth', 'is.admin']);
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit')->middleware(['auth', 'is.admin']);
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store')->middleware(['auth', 'is.admin']);
Route::post('/categories/update/{category}', [CategoryController::class, 'update'])->name('categories.update')->middleware(['auth', 'is.admin']);
Route::post('/categories/delete/{category}', [CategoryController::class, 'delete'])->name('categories.delete')->middleware(['auth', 'is.admin']);

Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks.index');
Route::get('/feedbacks/show/{feedback}', [FeedbackController::class, 'show'])->name('feedbacks.show');
Route::get('/feedbacks/create/', [FeedbackController::class, 'create'])->name('feedbacks.create')->middleware(['auth', 'is.admin']);
Route::get('/feedbacks/edit/{feedback}', [FeedbackController::class, 'edit'])->name('feedbacks.edit')->middleware(['auth', 'is.admin']);
Route::post('/feedbacks/store', [FeedbackController::class, 'store'])->name('feedbacks.store')->middleware(['auth', 'is.admin']);
Route::post('/feedbacks/update/{feedback}', [FeedbackController::class, 'update'])->name('feedbacks.update')->middleware(['auth', 'is.admin']);
Route::post('/feedbacks/delete/{feedback}', [FeedbackController::class, 'delete'])->name('feedbacks.delete')->middleware(['auth', 'is.admin']);

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/show/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/create/', [NewsController::class, 'create'])->name('news.create')->middleware(['auth', 'is.admin']);
Route::get('/news/edit/{news}', [NewsController::class, 'edit'])->name('news.edit')->middleware(['auth', 'is.admin']);
Route::post('/news/store', [NewsController::class, 'store'])->name('news.store')->middleware(['auth', 'is.admin']);
Route::post('/news/update/{news}', [NewsController::class, 'update'])->name('news.update')->middleware(['auth', 'is.admin']);
Route::post('/news/delete/{news}', [NewsController::class, 'delete'])->name('news.delete')->middleware(['auth', 'is.admin']);

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/show/{order}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/orders/create/', [OrderController::class, 'create'])->name('orders.create')->middleware(['auth', 'is.admin']);
Route::get('/orders/edit/{order}', [OrderController::class, 'edit'])->name('orders.edit')->middleware(['auth', 'is.admin']);
Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store')->middleware(['auth', 'is.admin']);
Route::post('/orders/update/{order}', [OrderController::class, 'update'])->name('orders.update')->middleware(['auth', 'is.admin']);
Route::post('/orders/delete/{order}', [OrderController::class, 'delete'])->name('orders.delete')->middleware(['auth', 'is.admin']);

//Auth::routes();
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware(['auth', 'is.admin']);
Route::get('/users/show/{user}', [UserController::class, 'show'])->name('users.show')->middleware(['auth', 'is.admin']);
Route::get('/users/create/', [UserController::class, 'create'])->name('users.create')->middleware(['auth', 'is.admin']);
Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store')->middleware(['auth', 'is.admin']);
Route::post('/users/update/{user}', [UserController::class, 'update'])->name('users.update')->middleware(['auth', 'is.admin']);
Route::post('/users/delete/{user}', [UserController::class, 'delete'])->name('users.delete')->middleware(['auth', 'is.admin']);

