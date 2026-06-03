<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\RegisterController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminParticipantController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', HomeController::class);

Route::get('/register-event', [RegisterController::class, 'create']);
Route::post('/register-event', [RegisterController::class, 'store']);

Route::get('/participant/{token}', [RegisterController::class, 'dashboard']);

Route::get('/checkin/{token}', [AdminParticipantController::class, 'checkin']);
//Route::get('/event.ics', fn() => response(/* isi .ics */)->header('Content-Type', 'text/calendar'))->name('event.ics');

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/participants', [AdminParticipantController::class, 'index'])->name('participants.index');
        Route::get('/participants/export', [AdminParticipantController::class, 'export'])->name('participants.export');
        Route::get('/participants/{participant}', [AdminParticipantController::class, 'show'])->name('participants.show');
        Route::post('/participants/{participant}/verify-payment', [AdminParticipantController::class, 'verifyPayment'])->name('participants.verify-payment');
        Route::patch('/participants/{participant}/verify', [AdminParticipantController::class, 'verifyPayment'])->name('participants.verify');

        Route::get('/scanner', [AdminParticipantController::class, 'scanner'])->name('scanner');
        Route::post('/scanner/checkin', [AdminParticipantController::class, 'processCheckin'])->name('scanner.checkin');
        Route::post('/participants/{participant}/resend-email', [AdminParticipantController::class, 'resendEmail'])
            ->name('participants.resend-email');
    });

require __DIR__ . '/auth.php';
