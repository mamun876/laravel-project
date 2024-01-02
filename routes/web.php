<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SalesController;
use App\Models\User;
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
    return view('backend.dashboard');
    
    Route::get('/', function () {
        return view('backend/dashboard');
    })->middleware('userAuth');
});

Route::get('/login', function () {
    return view('backend/login');
});
Route::post('/login',[LoginController::class, 'authenticate'])->middleware('userAuth');
Route::get('/delete{p_id}',[LoginController::class, 'delete'])->middleware('userAuth');
Route::get('/logout',[LoginController::class, 'logout']);
Route::get('/productList',[ProductController::class,'index']);
Route::get('/backend/SalesList',[SalesController::class,'index']);
Route::get('/backend/PurchaseList',[PurchaseController::class,'purchase']);
