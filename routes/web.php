<?php

use App\Http\Controllers\OffersController;
use App\Http\Controllers\PostController;
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

Route::get('offers',[OffersController::class,'get_offers']);

Route::group(['prefix'=>'offers'],function(){
    // Route::get('store',[OffersController::class,'store']);

    Route::get('create',[OffersController::class,'show_form']);
    Route::post('store',[OffersController::class,'store'])->name('offers.store');
    Route::get('all',[OffersController::class,'index']);
});