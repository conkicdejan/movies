<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/movies');
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies/create', [MovieController::class, 'store']);
Route::get('/movies/genre/{genre}', [GenreController::class, 'show']);
Route::post('/movies/{movie}/comments/create', [CommentController::class, 'store']);
Route::get('/movies/{movie}', [MovieController::class, 'show']);
