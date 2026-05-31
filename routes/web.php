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

Route::get('/register-event', [
    RegisterController::class,
    'create'
]);

Route::post('/register-event', [
    RegisterController::class,
    'store'
]);

Route::get(
    '/participant/{token}',
    [RegisterController::class, 'dashboard']
);



/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get(
        '/profile',
        [ProfileController::class, 'edit']
    )->name('profile.edit');

    Route::patch(
        '/profile',
        [ProfileController::class, 'update']
    )->name('profile.update');

    Route::delete(
        '/profile',
        [ProfileController::class, 'destroy']
    )->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function () {

        Route::get(
            '/',
            [DashboardController::class, 'index']
        );

        Route::get(
            '/participants',
            [AdminParticipantController::class, 'index']
        );

        Route::get(
            '/participants/{participant}',
            [AdminParticipantController::class, 'show']
        );
        Route::post(
            '/participants/{participant}/verify-payment',
            [AdminParticipantController::class, 'verifyPayment']
        );
        Route::get(
            '/scanner',
            [AdminParticipantController::class, 'scanner']
        );

        Route::post(
            '/scanner/checkin',
            [AdminParticipantController::class, 'processCheckin']
        );
    });
Route::get(
    '/checkin/{token}',
    [AdminParticipantController::class, 'checkin']
);
require __DIR__ . '/auth.php';
