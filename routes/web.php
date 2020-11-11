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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'role:admin'], function() {
    Route::get('/dashboard', function() {
       return 'Добро пожаловать, Админ';
    });
    Route::group('/create',[App\Http\Controllers\MangaController::class, 'create'])->name('create');
    Route::group('/update',[App\Http\Controllers\MangaController::class, 'update'])->name('update');
    Route::group('/edit',[App\Http\Controllers\MangaController::class, 'edit'])->name('update');
 });