<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MonitoringCalendarController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\FacultyShow;

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

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('login/login');
    })->name('index');

    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Logout
    Route::get('/logout', function () {
        auth()->logout();
        return redirect('/');
    })->name('logout');

    // Dashboard
    Route::get('/dashboard', [ScheduleController::class, 'dashboard'])->name('dashboard');

    // Schedule
    // Route::get('/schedule', [ScheduleController::class, 'schedule'])->name('schedule');
    // Route::get('/schedule/add', [ScheduleController::class, 'addSchedule'])->name('schedule.add');
    // Route::post('/schedule/save', [ScheduleController::class, 'saveSchedule'])->name('schedule.save');
    // Route::get('/schedule/{id}/edit', [ScheduleController::class, 'editSchedule'])->name('schedule.edit');
    // Route::post('/schedule/{id}/update', [ScheduleController::class, 'updateSchedule'])->name('schedule.update');
    // Route::get('/schedule/{id}/delete', [ScheduleController::class, 'deleteSchedule'])->name('schedule.delete');

    // Access Logs
    Route::get('/logs', function () {
        return view('accessLogs');
    })->name('logs');

    // Settings
    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');
    Route::put('/settings-account', [UserController::class, 'updateProfile'])->name('profileUpdate');
    Route::post('/settings-password', [UserController::class, 'updatePassword'])->name('updatePassword');
    Route::post('/settings-upload', [UserController::class, 'uploadProfile'])->name('uploadProfile');
});

// Admin routes ROUTES N KAY ADMIN LNG PWEDE DITO LALAGAY
Route::middleware(['auth', 'auth.admin'])->group(function () {
    // Faculty
    Route::get('/faculty', [UserController::class, 'index']);
    // Schedule
    Route::get('/schedule', [ScheduleController::class, 'schedule'])->name('schedule');
    // Monitoring
    Route::get('/monitoring', [MonitoringCalendarController::class, 'getEvent'])->name('monitoring');


    //   Route::get('/schedule/add', [ScheduleController::class, 'addSchedule'])->name('schedule.add');
    //   Route::post('/schedule/save', [ScheduleController::class, 'saveSchedule'])->name('schedule.save');
    //   Route::get('/schedule/{id}/edit', [ScheduleController::class, 'editSchedule'])->name('schedule.edit');
    //   Route::post('/schedule/{id}/update', [ScheduleController::class, 'updateSchedule'])->name('schedule.update');
    //   Route::get('/schedule/{id}/delete', [ScheduleController::class, 'deleteSchedule'])->name('schedule.delete');

});

// User routes HOME LANG NANDITO KASE BOTH USER AND ADMIN MAY ACCESS SA COMMON TABS KAYA LABAS N YONG ROUTES NON SA GROUP FUNCTION
Route::middleware(['auth', 'auth.user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
