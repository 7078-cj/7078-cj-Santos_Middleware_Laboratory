<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;




// CREATE ROUTES 
Route::middleware('guest')->group(function (){
    Route::get('/login',[AuthController::class,'showLogIn'])->name('login');
    Route::post('/login',[AuthController::class,'login']);
    
    Route::get('/register',[AuthController::class,'showRegister']);
    Route::post('/register',[AuthController::class,'register']);
    });

Route::middleware('auth')->group(function (){
    Route::post('/logout',[AuthController::class,'logout']);

    Route::middleware('role')->group(function (){
       
        
        Route::get('/', function () {
            return view('welcome');});

       });
    

    Route::get('/AdminPage', function () {
        return view('AdminPage');});

    Route::get('/GuestPage', function () {
            return view('GuestPage');});
});

