<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyHomeController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/info',[HomeController::class,'info']);
Route::post('/home',[HomeController::class,'store']);
Route::post('/store',[MyHomeController::class,'store']);
Route::get('/contact',[MyHomeController::class,'index'])->name('contact');
Route::get('/article',[ArticleController::class,'index'])->name('article');
Route::post('/article',[ArticleController::class,'store']);



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
