<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HRM\ShiftController;
use App\Http\Controllers\HRM\HolidayController;
use App\Http\Controllers\HRM\OTLevelController;
use App\Http\Controllers\HRM\WeekDayController;
use App\Http\Controllers\HRM\CalendarController;
use App\Http\Controllers\HRM\EmployeeController;
use App\Http\Controllers\HRM\WorkTypeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->as('hrm.')->group(function (){

    /** Home Page */
    Route::get('/', function () {
        return view('hrm.layouts.app');
    })->name('dashboard');

    /** Employee */
    Route::resource('employees',EmployeeController::class);

    /** Holiday */
    Route::resource('holidays',HolidayController::class);

    /** Calendar */
    Route::get('calendar', [CalendarController::class, 'index'])->name('calendar');

    /** Week Days */
    Route::get('week-days', [WeekDayController::class, 'index'])->name('week-days.index');

    /** OT Levels */
    Route::resource('ot-levels', OTLevelController::class);

    /** Work Types */
    Route::resource('work-types', WorkTypeController::class);

    /** Shifts */
    Route::resource('shifts', ShiftController::class);

    /** Stats */
    Route::get('required-work', [WeekDayController::class, 'index'])->name('required-work.index');
    Route::get('round-work', [WeekDayController::class, 'index'])->name('round-work.index');
    Route::get('late-in', [WeekDayController::class, 'index'])->name('late-in.index');
    Route::get('early-out', [WeekDayController::class, 'index'])->name('early-out.index');
    Route::get('absents', [WeekDayController::class, 'index'])->name('absents.index');
    Route::get('breaks', [WeekDayController::class, 'index'])->name('breaks.index');
    Route::get('sick-leaves', [WeekDayController::class, 'index'])->name('sick-leaves.index');
    Route::get('vacations', [WeekDayController::class, 'index'])->name('vacations.index');
    Route::get('casual-leaves', [WeekDayController::class, 'index'])->name('casual-leaves.index');
    Route::get('earn-leaves', [WeekDayController::class, 'index'])->name('earn-leaves.index');
    
});
require __DIR__.'/auth.php';
