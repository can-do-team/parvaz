<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;

//use Illuminate\Support\Facades\Route;
use Inertia\Inertia; // We are going to use this class to render React components

Route::get('/', function () {
    return Inertia::render('Test'); // This will get component Test.jsx from the resources/js/Pages/Test.jsx
});
//
//Route::get('/a', function () {
//    return Inertia::render('Login'); // This will get component Test.jsx from the resources/js/Pages/Test.jsx
//});


Route::get("/login",[AuthController::class,'login'])->name('login');
Route::post("/login",[AuthController::class,'loginAction'])->name('loginAction');
Route::get("/register",[AuthController::class,'register'])->name('register');
Route::post("/register",[AuthController::class,'registerAction'])->name('registerAction');
Route::get("/login",[AuthController::class,'login'])->name('login');
Route::get("/dashboard",[DashboardController::class,'show'])->name('dashboard');
Route::get("/admin-dashboard",[DashboardController::class,'show'])->name('admin-dashboard');
Route::get("/groups",[GroupController::class,'index'])->name('groups');
Route::get("/group/{group}/edit",[GroupController::class,'edit'])->name('group-edit');

