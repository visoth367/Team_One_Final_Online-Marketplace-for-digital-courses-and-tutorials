<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//admin
// Public routes
Route::get('/admin/register', [AdminController::class, 'showRegistrationForm'])->name('admin.registerForm');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.post');
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin-only routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/messages', [AdminController::class, 'showMessages'])->name('admin.messages');
    Route::get('/admin/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
    Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');

    // User management routes
    Route::get('/admin/user', [AdminController::class, 'show'])->name('admin.users');
    Route::get('/admin/user/{id}/edit', [AdminController::class, 'edit'])->name('user.edit');
    Route::put('/admin/user/{id}', [AdminController::class, 'update'])->name('user.update');
    Route::delete('/admin/user/{id}', [AdminController::class, 'destroy'])->name('user.destroy');
    Route::get('/admin/courses', [AdminController::class, 'showCourses'])->name('admin.courses');
});
