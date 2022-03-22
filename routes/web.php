<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ActivityPlaceController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\MoviesController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/index', [IndexController::class, 'index']);
Route::get('/activityPlace', [ActivityPlaceController::class, 'index']);
Route::get('/applicant', [ApplicantController::class, 'index']);
Route::get('/movies', [MoviesController::class, 'index']);
Route::get('/{category}', function($category){
    return view($category);
});
