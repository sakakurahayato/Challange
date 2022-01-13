<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/',[ContactController::class,'index']);
Route::post('/check', [ContactController::class,'check']);
Route::post('/submit',[ContactController::class,'submit']);
Route::post('/fix',[ContactController::class,'fix']);
Route::get('/management',[ContactController::class,'management']);
Route::post('/result',[ContactController::class,'result']);
Route::post('/delete',[ContactController::class,'delete']);