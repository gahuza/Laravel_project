<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TraineeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trainee',[TraineeController::class,'index'])->name('trainee.index');
Route::get('/trainee/register',[TraineeController::class,'register'])->name('trainee.insert');
Route::post('/trainees',[TraineeController::class,'save'])->name('trainee.save');
Route::get('/trainees/{student}/edit',[TraineeController::class,'edit'])->name('trainee.edit');
Route::put('/trainees/{student}/update',[TraineeController::class,'update'])->name('trainee.update');
Route::delete('/trainees/{student}/delete',[TraineeController::class,'delete'])->name('trainee.delete');