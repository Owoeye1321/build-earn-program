<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [ApplicationController::class,'index',])->name('home');
Route::get('/apply', [ApplicationController::class,'index',])->name('apply');
Route::post('/apply', [ApplicationController::class,'apply',])->name('apply');
Route::get('/home', [AdminController::class,'index',])->name('home');
Route::get('/view/$id', [AdminController::class,'viewApplication',])->name('view');