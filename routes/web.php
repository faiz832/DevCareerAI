<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseStudentController;
use App\Http\Controllers\CourseVideoController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscribeTransactionController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/details/{course:slug}', [FrontController::class, 'details'])->name('front.details');
// Route::get('/category/{category:slug}', [FrontController::class, 'category'])->name('front.category');
Route::get('/pricing', [FrontController::class, 'pricing'])->name('front.pricing');
Route::get('/resume', [FrontController::class, 'resume'])->name('front.resume');
Route::get('/course', [FrontController::class, 'course'])->name('front.course');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/checkout', [FrontController::class, 'checkout'])->name('front.checkout')->middleware('role:student');
    Route::get('/mycourses', [CourseStudentController::class, 'index'])->name('mycourses.index')->middleware('role:student');
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
