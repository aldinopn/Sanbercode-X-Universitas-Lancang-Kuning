<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\biodataController;
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

Route::get('/', [dashboardController::class,'index']);
Route::get('/register', [biodataController::class,'register']);
Route::post('/home', [biodataController::class, 'home']);
Route::get('/data-table', function() {
    return view('data-table');
});
Route::get('/table', function() {
    return view('table');
});
// Route::get('/master', function() {
//     return view('layouts.master');
// });