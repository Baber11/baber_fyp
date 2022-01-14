<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// domain.com/api/employee/login
    // ---------------------------------------------------------------------------
    //                             LOGIN API
    // ---------------------------------------------------------------------------
Route::post('/employee/login',[App\Http\Controllers\Api\loginController::class,'login']);

    // ---------------------------------------------------------------------------
    //                             EMP PROFILE API
    // ---------------------------------------------------------------------------
// emploee_id
Route::get('/empprofile/{id}',[App\Http\Controllers\Api\empprofileController::class, 'empprofile']);

    // ---------------------------------------------------------------------------
    //                             DEPARTMENT API
    // ---------------------------------------------------------------------------
Route::get('/department',[App\Http\Controllers\Api\departmentController::class, 'department']);

    // ---------------------------------------------------------------------------
    //                                INFO API
    // ---------------------------------------------------------------------------
Route::get('/info',[App\Http\Controllers\Api\infoController::class, 'info']);

    // ---------------------------------------------------------------------------
    //                                PAYSLIP API
    // ---------------------------------------------------------------------------
Route::get('/payslip/{id}', [App\Http\Controllers\Api\payslipController::class, 'payslip']);

    // ---------------------------------------------------------------------------
    //                             LEAVE REQUEST API
    // ---------------------------------------------------------------------------
Route::post('/leave/{employee}', [App\Http\Controllers\Api\leaveController::class, 'leave']);

//-------------------------------------------------------------------------------------
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
