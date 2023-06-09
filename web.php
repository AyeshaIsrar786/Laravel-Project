<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ListController;
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


Route::get('/lists',[ListController::class,'index']);
Route::post('/lists',[ListController::class,'create']);
Route::get('/lists/create',[ListController::class,'showme']);
Route::get('/lists/delete/{id}',[ListController::class,'delete']);    
