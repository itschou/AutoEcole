<?php

use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Videos;

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
    $user = User::first();
    return view('welcome', compact('user'));
});

Route::get('user', [VideosController::class, 'index']);
