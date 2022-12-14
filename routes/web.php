<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MotorbikeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VehicleController;
use App\Models\Motorbike;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('authors', AuthorController::class);
    Route::resource('books', BookController::class);
    Route::resource('vehicles', VehicleController::class);
    Route::resource('cars', CarController::class);
    Route::resource('motorbikes', MotorbikeController::class);
});


Route::get('/vehicle', [VehicleController::class, "index"]);
Route::get('/car', [CarController::class, "index"]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
