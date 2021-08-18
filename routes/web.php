<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MainController; //Importing main controller class
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

Route::get('/index', function () {
    return view('index');
});

Route::get('/todos',[App\Http\Controllers\TodosController::class, 'index']);
Route::get('/report',[App\Http\Controllers\ReportController::class, 'index']);
Route::get('/report',[App\Http\Controllers\ReportController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
