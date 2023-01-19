<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\UserController;

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
    return view('login/login');
});

Route::get('/test', function () {
    return view('test');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ScheduleController::class, 'dashboard'])->name('dashboard');
});

Route::get('/addSchedule', [ScheduleController::class, 'addSchedule']);
Route::post('/saveSchedule', [ScheduleController::class, 'saveSchedule']);
Route::get('/editSchedule/{id}', [ScheduleController::class, 'editSchedule']);
Route::post('/updateSchedule', [ScheduleController::class, 'updateSchedule']);
Route::get('/deleteSchedule/{id}', [ScheduleController::class, 'deleteSchedule']);
