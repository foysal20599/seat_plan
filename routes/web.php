<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [StudentController::class, 'login'])->name('login');
Route::get('get-section', [StudentController::class, 'getSection'])->name('get.section');
Route::get('student', [StudentController::class, 'student']);
Route::post('store-info', [StudentController::class, 'teacher'])->name('teacher.info');
Route::get('seat-plan-view', [StudentController::class, 'seatPlan'])->name('seat.plan.view');
Route::get('export-seat-plan', [StudentController::class, 'seatPlanExport'])->name('export.seatplan');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
