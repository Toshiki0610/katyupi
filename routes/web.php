<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/trainin', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [TrainingController::class, 'index'])->name('trainings.index');
    Route::get('/trainings/show', [TrainingController::class, 'show'])->name('trainings.show');
    Route::get('/calendar', [EventController::class, 'show'])->name("show"); 
    Route::post('/calendar/create', [EventController::class, 'create'])->name("create");
    Route::post('/calendar/get',  [EventController::class, 'get'])->name("get");
});

require __DIR__.'/auth.php';
