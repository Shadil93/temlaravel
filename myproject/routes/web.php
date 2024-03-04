<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware;
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

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/register',[HomeController::class,'index'])->name('register');
Route::post('/do_register',[HomeController::class,'do_register'])->name('do_register');
Route::get('/view',[HomeController::class,'view'])->name('view');
Route::get('/edit{id}',[HomeController::class,'edit'])->name('edit');
Route::post('/update{id}',[HomeController::class,'update'])->name('update');
Route::get('/delete{id}',[HomeController::class,'delete'])->name('delete');

Route::get('/layout.index',[HomeController::class,'layout.index'])->name('layout.index');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/do_login',[HomeController::class,'do_login'])->name('do_login');

Route::get('/logout',[HomeController::class,'logout'])->name('logout');


Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard')->middleware('check');

Route::get('/profile',[HomeController::class,'profile'])->name('profile');




