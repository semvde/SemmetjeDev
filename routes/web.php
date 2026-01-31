<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::permanentRedirect('/dashboard', '/')
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'home'])
    ->name('home');

Route::resource('projects', ProjectController::class)
    ->only(['index', 'show']);

Route::resource('blog', BlogController::class)
    ->only(['index', 'show'])
    ->parameters(['blog' => 'post']);

Route::get('/contact', [HomeController::class, 'contact'])
    ->name('contact');

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])
        ->name('index');

    Route::get('projects', [AdminController::class, 'projects'])
        ->name('projects.index');

    Route::resource('projects', ProjectController::class)
        ->except(['index']);
});

require __DIR__ . '/auth.php';
