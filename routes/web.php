<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\PhaseController;
//use App\Http\Controllers\EtudiantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::resource('/contact', ContactController::class);
Route::resource('/projet', ProjetController::class);
Route::resource('/phase', PhaseController::class);


//Route::get('/liste', [EtudiantController::class,'liste']);
//Route::get('liste/', [CoursController::class,'liste']);