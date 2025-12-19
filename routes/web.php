<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PlansController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/domains', [DomainController::class, 'store'])->name('domains.store');
});

Route::get('/users', [UsersController::class, 'index'])->middleware(['auth', 'admin']); //name('users.index');
Route::get('/plans', [PlansController::class, 'index'])->middleware('auth');
Route::post('/plans/buy/{id}', [PlansController::class, 'buy'])->middleware('auth');

require __DIR__.'/auth.php';
