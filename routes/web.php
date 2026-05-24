<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index']);


Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);



Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/create', [AdminController::class, 'create']);
    Route::post('/admin', [AdminController::class, 'store']);
    Route::get('/admin/edit/{admin}', [AdminController::class, 'edit']);
    Route::put('/admin/update/{admin}', [AdminController::class, 'update']);
    Route::delete('/admin/delete/{admin}', [AdminController::class, 'destroy']);
      Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});