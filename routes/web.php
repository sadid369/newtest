<?php

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
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('add',[StudentController::class,'stuForm']);
// Route::get('lists',[StudentController::class,'list-student']);
Route::post('adduser',[StudentController::class,'adduser']);
Route::get('delete/{id}',[StudentController::class,'delete']);

Route::get('list', [StudentController::class,'list']);

Route::get('editstu/{id}', [StudentController::class,'editStu']);
Route::post('edit', [StudentController::class,'edit']);
