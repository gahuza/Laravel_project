<?php

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\AccountController;
//use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trainee',[TraineeController::class,'index'])->name('trainee.index');
Route::get('/trainee/register',[TraineeController::class,'register'])->name('trainee.insert');
Route::post('/trainees',[TraineeController::class,'save'])->name('trainee.save');
Route::get('/trainees/{student}/edit',[TraineeController::class,'edit'])->name('trainee.edit');
Route::put('/trainees/{student}/update',[TraineeController::class,'update'])->name('trainee.update');
Route::delete('/trainees/{student}/delete',[TraineeController::class,'delete'])->name('trainee.delete');
Route::get('/trainee/users',[AccountController::class,'user'])->name('user.register');
Route::post('/users',[AccountController::class,'regi'])->name('user.regi');
Route::get('/login',[AccountController::class,'loginform'])->name('user.display');
Route::post('/login',[AccountController::class,'login'])->name('user.login');
Route::post('/logout',[AccountController::class,'logout'])->name('user.logout');