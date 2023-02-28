<?php

use App\Http\Controllers\UserController;
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
    return view('dashboard', compact('user'));
});

Route::get('user', [VideosController::class, 'index'])->middleware('auth');
Route::get('admin', [UserController::class, 'indexAdmin'])->middleware(['auth', 'admin'])->name('adminDashboard');


Route::post('/getusers', [UserController::class, 'getUsers'])->name('users.post')->middleware(['auth', 'admin']);
Route::post('/updateuser/{id}', [UserController::class, 'UpdateUser'])->name('users.update')->middleware(['auth', 'admin']);


Route::post('/videos/{video}/like', [VideosController::class, 'like'])->name('videos.like')->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
