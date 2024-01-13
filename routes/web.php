<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupportController;
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


Route::get("/questions",[SupportController::class,'questions'])->name('questions');
Route::get("/question",[SupportController::class,'question'])->name('question');
Route::get("/faq",[SupportController::class,'faq'])->name('faq');
Route::get("/support",[SupportController::class,'home'])->name('support');
Route::get("/document/send",[ProfileController::class,'send_document'])->name('send-document');
Route::get("/subscribers",[ProfileController::class,'subscribers'])->name('subscribers');
Route::get("/profile",[ProfileController::class,'profile'])->name('profile');
Route::get("/group/user",[GroupController::class,'group_user'])->name('group-user');
Route::get("/broadcast/user",[BroadcastController::class,'broadcast_user'])->name('broadcast-user');
Route::get("/report/consumption",[AuthController::class,'report'])->name('report');
Route::get("/report/quality",[AuthController::class,'report_quality'])->name('quality');
Route::get("/show-group",[DashboardController::class,'show_group'])->name('show-group');
Route::get("/login",[AuthController::class,'login'])->name('login');
Route::post("/login",[AuthController::class,'loginAction'])->name('loginAction');
Route::get("/register",[AuthController::class,'register'])->name('register');
Route::post("/register",[AuthController::class,'registerAction'])->name('registerAction');
Route::get("/login",[AuthController::class,'login'])->name('login');
Route::get("/dashboard",[DashboardController::class,'show'])->name('dashboard');
Route::get("/admin-dashboard",[DashboardController::class,'show'])->name('admin-dashboard');
Route::get("/groups",[GroupController::class,'index'])->name('groups');
Route::get("/broadcasts",[BroadcastController::class,'index'])->name('broadcasts');
Route::get("/group/{group}/edit",[GroupController::class,'edit'])->name('group-edit');
Route::post("/logout",[AuthController::class,'logout'])->name('logout');

Route::post("/profile/update",[ProfileController::class,'profile_update'])->name('profile-update');
Route::post("/support/new",[SupportController::class,'new'])->name('support-new');
