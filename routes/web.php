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

Route::get('/dashboard', function(){
    return view('admin.dashboard');
});

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/create', [App\Http\Controllers\ProfilesController::class, 'create'])->name('profile.create');
Route::post('/profile/store', [App\Http\Controllers\ProfilesController::class, 'store'])->name('profile.store');

Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');

Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');



Route::post('/report',[App\Http\Controllers\ReportController::class, 'store'])->name('reports.store');
Route::get('/report',[App\Http\Controllers\ReportController::class, 'create'])->name('reports.create');





