<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

############
Route::prefix('Admin')->middleware(['auth', 'verified'])->group(function() {

    Route::get('Users', [UserController::class, 'index'])->name('users');

    Route::get('User/New', [UserController::class, 'create'])->name('user.create');
    Route::get('User/New/Store', [UserController::class, 'store'])->name('user.store');

    Route::get('User/{id}/Edit', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('User/Edit/Update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('User/{id}/Delete', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('Products', [ProductController::class, 'index'])->name('products');
});
############ 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
