<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputController;
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

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/form', function () {
    return view('form');
});

Route::post('/form', function () {
    return view('form');
});

Route::get('/tugas', function () {
    return view('tugas');
});

Route::post('/tugas', function () {
    return view('tugas');
});

Route::get('/input', function () {
    return view('input');
});

Route::post('/input', function () {
    return view('input');
});



Route::get('/input', [InputController::class, 'index']);
Route::post('/hasil', [InputController::class, 'hasil']);

Route::get('/dashboard', [DashboardController::class, 'index']);