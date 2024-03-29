<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;






Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware'=>'admin.guest'],function(){
            Route::get('/login',[AuthController::class,'showLoginForm'])->name('admin.login');
            Route::post('/authenticate',[AuthController::class,'login'])->name('authenticate');
           
    });
    Route::group(['middleware'=>'admin.auth'],function(){
      Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
      Route::post('/logout',[AuthController::class,'logout'])->name('admin.logout');
    });
});