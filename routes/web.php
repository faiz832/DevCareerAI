<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->group(function (){
    Route::resource('categories', CategoryController::class)
    ->middleware('role:owner'); // admin.categories.index

    Route::resource('teachers', TeacherController::class)
    ->middleware('role:owner');

    Route::resource('courses', CourseController::class)
    ->middleware('role:owner|teacher');

    Route::resource('subscribe_transactions', SubscribeTransactionController::class)
    ->middleware('role:owner');

    Route::resource('course_videos', CourseVideoController::class)
    ->middleware('role:owner|teacher');
});

require __DIR__.'/auth.php';
