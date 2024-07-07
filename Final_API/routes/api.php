<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\ContactUsController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// User Sign-up API
Route::post('/user/signup', [AuthController::class, 'signUp']);

// User Sign-in API
Route::post('/user/signin', [AuthController::class, 'signIn']);

// Admin Login API
Route::post('/admin/login', [AdminController::class, 'login']);

// Course Get API
Route::get('/courses', [CourseController::class, 'getCourses']);

// Profile API
Route::get('/profile', [ProfileController::class, 'getProfile'])->middleware('auth:sanctum');
Route::put('/profile', [ProfileController::class, 'updateProfile'])->middleware('auth:sanctum');

// Contact Us API
Route::post('/contact', [ContactUsController::class, 'submitContactForm']);

// Get Contact Us API
Route::get('/contacts', [ContactUsController::class, 'getContacts'])->middleware('auth:sanctum');



