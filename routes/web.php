<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('login');
// });


Route::get('login', [StudentController::class, 'login'])->name('login');
Route::get('student', [StudentController::class, 'student']);
Route::post('store-info', [StudentController::class, 'teacher'])->name('teacher.info');
Route::get('seat-plan-view', [StudentController::class, 'seatPlan'])->name('seat.plan.view');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
