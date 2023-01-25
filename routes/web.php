<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegisterCandidateController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

// Route user
Route::prefix('/users')->middleware(['checkRole:user'])->group(function() {
    Route::get('/', [HomeController::class, 'index']);
});


// Route admin
Route::prefix('/dashboard')->middleware(['checkRole:admin'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('user.index');

    Route::get('/cadidate/register', [RegisterCandidateController::class, 'index'])->name('candidate.index');
});
