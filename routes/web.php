<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\userController;
use App\Http\Controllers\Login;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [Login::class, 'showLoginForm']);
Route::post('/login', [Login::class, 'showLoginForm']);

Route::get('/students/create', [studentController::class, 'create']);
Route::post('/students/store', [studentController::class, 'store']); 

Route::get('/students', [studentController::class, 'index']);

Route::get('/students/update/{id}', [studentController::class, 'edit']);
Route::post('/students/update/{id}', [studentController::class, 'update']);

Route::get('/students/delete/{id}', [studentController::class, 'delete']);
