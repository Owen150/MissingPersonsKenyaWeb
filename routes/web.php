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

Route::get('/',[App\Http\Controllers\ReportController::class, 'index'])->name('welcome');

Route::get('/index', function () {
    return view('index');
});

Route::get('/todos',[App\Http\Controllers\TodosController::class, 'index']);
Route::get('/report',[App\Http\Controllers\ReportController::class, 'create'])->name('reports.create');
Route::post('/report',[App\Http\Controllers\ReportController::class, 'store'])->name('reports.store');
Route::get('/about',[App\Http\Controllers\aboutcontroller::class, 'index'])->name('about');
Route::get('/contact',[App\Http\Controllers\contactcontroller::class, 'index'])->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


