<?php

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'role:admin'], function() {
    Route::get('/dashboard', function() {
       return 'Добро пожаловать, Админ';
    });
    Route::get('/create',[App\Http\Controllers\MangaController::class, 'create'])->name('create');
    Route::get('/update',[App\Http\Controllers\MangaController::class, 'update'])->name('update');
    Route::get('/edit',[App\Http\Controllers\MangaController::class, 'edit'])->name('update');
 });

 Route::get('/manga',[App\Http\Controllers\MangaController::class, 'index'])->name('index');