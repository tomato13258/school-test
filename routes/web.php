<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddclassController;
use App\Http\Controllers\ClassEditController;
use App\Http\Controllers\AddTeacherController;
use App\Http\Controllers\EditTeacherController;
use App\Http\Controllers\NewAllClassController;
use App\Http\Controllers\EditAllClassController;
use App\Http\Controllers\ClassManagementController;
use App\Http\Controllers\TeacherManagementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 新增的vue頁面
Route::get('/ClassManagement', [ClassManagementController::class, 'index'])->name('ClassManagement');
Route::get('/TeacherManagement', [TeacherManagementController::class, 'index'])->name('TeacherManagement');
Route::get('/Addclass', [AddclassController::class, 'index'])->name('Addclass');
// 子頁面
Route::get('/ClassEdit', [ClassEditController::class, 'index'])->name('ClassEdit');
Route::get('/AddTeacher', [AddTeacherController::class, 'index'])->name('AddTeacher');
Route::get('/EditTeacher', [EditTeacherController::class, 'index'])->name('EditTeacher');
Route::get('/EditAllClass', [EditAllClassController::class, 'index'])->name('EditAllClass');
Route::get('/NewAllClass', [NewAllClassController::class, 'index'])->name('NewAllClass');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
