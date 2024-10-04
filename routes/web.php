<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
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

Route::resource('items', ItemController::class);
Route::resource('categories', CategoryController::class);

//Initial route for /create and /store
//Route::get('/item/create',[ItemController::class,'create'])->name('item.create');
//Route::post('/item/store',[ItemController::class,'store'])->name('item.store');
