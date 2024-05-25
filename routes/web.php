<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/sign-in', function () {
    return view('login');
});

Route::get('/account', function () {
    return view('quiz-profile');
});

Route::get('/catalog', function () {
    return view('quiz-catalog');
});

Route::get('/account-2', function () {
    return view('quiz-profile-2');
});

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/quiz-finished', function () {
    return view('quiz-finished');
});

Route::get('/account-3', function () {
    return view('quiz-profile-3');
});

Route::get('/quiz-results', function () {
    return view('quiz-results');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
