<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/add_product',[AdminController::class,'view_product']);

Route::get('/create_product',[AdminController::class,'create']);

Route::post('/store_product',[AdminController::class,'store']);

Route::get('/update_product/{id}',[AdminController::class,'update']);


Route::put('/edit_product/{id}',[AdminController::class,'edit']);

Route::get('/delete_product/{id}',[AdminController::class,'delete']);