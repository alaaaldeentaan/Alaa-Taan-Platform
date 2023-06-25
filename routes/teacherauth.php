<?php

use App\Http\Controllers\TeacherAuth\AuthenticatedSessionController;
use App\Http\Controllers\TeacherAuth\ConfirmablePasswordController;
use App\Http\Controllers\TeacherAuth\EmailVerificationNotificationController;
use App\Http\Controllers\TeacherAuth\EmailVerificationPromptController;
use App\Http\Controllers\TeacherAuth\NewPasswordController;
use App\Http\Controllers\TeacherAuth\PasswordController;
use App\Http\Controllers\TeacherAuth\PasswordResetLinkController;
use App\Http\Controllers\TeacherAuth\RegisteredUserController;
use App\Http\Controllers\TeacherAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

/*
// Route::middleware(['guest:teacher', 'preventBackHistory'])->group(function () {
Route::group(
    ['middleware' => ['guest:teacher', 'preventBackHistory'], 'prefix' => 'teacher', 'as' => 'teacher.'],
    function () {
        // dd('RRRRRRRrr');
        Route::get('register', function () {
            return 'RRRRRRRRRRRR';
        })
            ->name('register');

        Route::get('/register', [RegisteredUserController::class, 'create'])
            ->name('register');

        Route::post('register', [RegisteredUserController::class, 'store']);

        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('password.store');
    }
);

// Route::middleware('auth:teacher')->group(function () {
Route::group(
    ['middleware' => ['auth:teacher', 'preventBackHistory'], 'prefix' => 'teacher', 'as' => 'teacher.'],
    function () {
        Route::get('verify-email', EmailVerificationPromptController::class)
            ->name('verification.notice');

        Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
            ->middleware(['signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
            ->middleware('throttle:6,1')
            ->name('verification.send');

        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
            ->name('password.confirm');

        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

        Route::put('password', [PasswordController::class, 'update'])->name('password.update');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
    }
);
*/

Route::prefix('teacher')->name('teacher.')->group(function () {

    Route::middleware(['guest:teacher', 'preventBackHistory'])->group(function () {

        Route::get('/register', [RegisteredUserController::class, 'create'])
            ->name('register');


        Route::post('register', [RegisteredUserController::class, 'store']);

        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('password.store');
    });

    Route::middleware(['auth:teacher', 'preventBackHistory'])->group(function () {
        Route::get('verify-email', EmailVerificationPromptController::class)
            ->name('verification.notice');

        Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
            ->middleware(['signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
            ->middleware('throttle:6,1')
            ->name('verification.send');

        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
            ->name('password.confirm');

        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

        Route::put('password', [PasswordController::class, 'update'])->name('password.update');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
    });
});