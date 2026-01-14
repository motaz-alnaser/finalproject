<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UserController;

// Public (frontend) routes
// Route::get('/', function () {
//     return view('user.index');
// })->name('index');


// Admin routes group
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/activities', [AdminController::class, 'activities'])->name('admin.activities');
Route::get('/admin/create_activity', [AdminController::class, 'create_activity'])->name('admin.create_activity');
Route::get('/admin/edit_activity', [AdminController::class, 'edit_activity'])->name('admin.edit_activity');
Route::get('/admin/bookings', [AdminController::class, 'bookings'])->name('admin.bookings');
Route::get('/admin/admin_profile', [AdminController::class, 'admin_profile'])->name('admin.admin_profile');
Route::get('/admin/reviews', [AdminController::class, 'reviews'])->name('admin.reviews');

Route::get('/owner/bookings', [OwnerController::class, 'bookings'])->name('owner.bookings');
Route::get('/owner/dashboard', [OwnerController::class, 'dashboard'])->name('owner.dashboard');
Route::get('/owner/add_activity', [OwnerController::class, 'add_activity'])->name('owner.add_activity');
Route::get('/owner/earnings', [OwnerController::class, 'earnings'])->name('owner.earnings');
Route::get('/owner/reviews', [OwnerController::class, 'reviews'])->name('owner.reviews');


Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/register', [UserController::class, 'register'])->name('user.register.store');
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/activities', [UserController::class, 'activities'])->name('user.activities');
Route::get('/activity_details', [UserController::class, 'activity_details'])->name('user.activity_details');
Route::get('/bookings', [UserController::class, 'bookings'])->name('user.bookings');