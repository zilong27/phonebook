<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
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

//Route::get('/','App\Http\Controllers\ContactsController@index')->name('index');



//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //  return view('dashboard');
//})->name('dashboard');
Route::resource('/contacts','App\Http\Controllers\ContactsController');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
