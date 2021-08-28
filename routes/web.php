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
Auth::routes();


Route::get('/',[App\Http\Controllers\ReportController::class, 'index'])->name('welcome');

Route::get('/index', function () {
    return view('index');
});

Route::get('/about',[App\Http\Controllers\aboutcontroller::class, 'index'])->name('about');
Route::get('/missing',[App\Http\Controllers\missingcontroller::class, 'index'])->name('missing');




Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::post('/report',[App\Http\Controllers\ReportController::class, 'store'])->name('reports.store');
Route::get('/report',[App\Http\Controllers\ReportController::class, 'create'])->name('reports.create');





