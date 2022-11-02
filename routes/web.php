<?php

use App\Http\Controllers\CatalogsController;
use App\Http\Controllers\ManufacturersController;
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

Route::get('catalogs',[CatalogsController::class,'index'])->name('catalogs.index');
Route::get('manufacturers',[ManufacturersController::class,'index'])->name('manufacturers.index');
