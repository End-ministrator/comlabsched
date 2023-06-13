<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MonitoringCalendarController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\FacultyShow;
// hardware integration
use App\Http\Controllers\RfidController;


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

// Python RFID route
Route::post('/start-rfid-scanning', [RfidController::class, 'startRfidScanning']);

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Logout
    Route::get('/logout', function () {
        auth()->logout();
        return redirect('/');
    })->name('logout');

    // Dashboard
    Route::get('/dashboard', [ScheduleController::class, 'dashboard'])->name('dashboard');

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

// Monitoring
Route::get('/monitoring', [MonitoringCalendarController::class, 'index'])->name('monitoring');

// Admin routes ROUTES N KAY ADMIN LNG PWEDE DITO LALAGAY
Route::middleware(['auth', 'auth.admin'])->group(function () {
    // Faculty
    Route::get('/faculty', [UserController::class, 'index']);
    // Schedule
    Route::get('/schedule', [ScheduleController::class, 'schedule'])->name('schedule');
    Route::get('/export-schedule', [ScheduleController::class, 'export'])->name('export');

});

// User routes HOME LANG NANDITO KASE BOTH USER AND ADMIN MAY ACCESS SA COMMON TABS KAYA LABAS N YONG ROUTES NON SA GROUP FUNCTION
Route::middleware(['auth', 'auth.user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


// Python RFID route
// Route::get('/start-rfid-scanning', [RfidController::class, 'startRfidScanning']);

