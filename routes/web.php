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

Route::get('/', function () {
    return view('welcome');
});
//Страница приветствия пользователей.
Route::get('/hello', function () {
    return <<<php
<!DOCTYPE html>
<html>
<body>
<h1>Hello user</h1>
</body>
</html>
php;
});
//Страница с информацией о проекте..
Route::get('/info', function () {
    return <<<php
<!DOCTYPE html>
<html>
<body>
<p>This project is a news agregator</p>
</body>
</html>
php;
});
//Страница для вывода одной и нескольких новостей.
Route::get('/news', function () {
    return <<<php
<!DOCTYPE html>
<html>
<body>
<p>Another rap singer leave Russia</p>
<p>Ruble exchange rate is still unstable</p>
</body>
</html>
php;
});
