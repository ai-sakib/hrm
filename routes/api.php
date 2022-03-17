<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HRM\ShiftController;
use App\Http\Controllers\API\HRM\HolidayController;
use App\Http\Controllers\API\HRM\OTLevelController;
use App\Http\Controllers\API\HRM\WeekDayController;
use App\Http\Controllers\API\HRM\EmployeeController;
use App\Http\Controllers\API\HRM\WorkTypeController;
use App\Http\Controllers\API\HRM\DesignationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('hrm')->as('api.hrm.')->group(function (){

    
    Route::middleware('auth:sanctum')->group(function (){

        /**Employee */
        Route::apiResource('employees', EmployeeController::class);

        /**Designation */
        Route::apiResource('designations', DesignationController::class);

        /**Holiday */
        Route::apiResource('holidays', HolidayController::class);
        Route::get('holidays/month/{month}/year/{year}', [HolidayController::class, 'monthWiseHolidays']);

        /**Week Days */
        Route::get('week-days', [WeekDayController::class, 'index'])->name('week-days.index');
        Route::post('week-days', [WeekDayController::class, 'store'])->name('week-days.store');

        /**OT Levels */
        Route::apiResource('ot-levels', OTLevelController::class);

        /**Work Types */
        Route::apiResource('work-types', WorkTypeController::class);

        /**Shifts */
        Route::apiResource('shifts', ShiftController::class);

        /**Test */
        Route::get('user', function (Request $request) {
            return $request->user();
        });

    });
    
});