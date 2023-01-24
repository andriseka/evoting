<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegisterCandidateController;
use App\Http\Controllers\Admin\UserController;
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
    return view('welcome');
});

Auth::routes();

Route::prefix('/dashboard')->middleware(['auth'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('user.index');

    Route::get('/cadidate/register', [RegisterCandidateController::class, 'index'])->name('candidate.index');
});