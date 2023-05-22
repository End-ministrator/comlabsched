<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacultyController;
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
})->middleware('guest')->name('index');

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');

Route::get('/test', function () {
    ddd("test");
    return view('test');
});



Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logs', function () {
    return view('accessLogs');
})->name('logs');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ScheduleController::class, 'dashboard'])->name('dashboard');
    Route::get('/schedule/add', [ScheduleController::class, 'addSchedule'])->name('schedule.add');
    Route::post('/schedule/save', [ScheduleController::class, 'saveSchedule'])->name('schedule.save');
    Route::get('/schedule/{id}/edit', [ScheduleController::class, 'editSchedule'])->name('schedule.edit');
    Route::post('/updateSchedule', [ScheduleController::class, 'updateSchedule'])->name('schedule.update');
    Route::get('/schedule/{id}/delete', [ScheduleController::class, 'deleteSchedule'])->name('schedule.delete');
    Route::get('/logs', function () {
        return view('accessLogs');
    })->name('logs');
});

// Faculty

Route::resource("/faculty", FacultyController::class);
