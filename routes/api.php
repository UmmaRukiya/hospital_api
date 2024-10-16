<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\EmployeController;
use App\Http\Controllers\Api\NurseController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\DesignationController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\DayController;
use App\Http\Controllers\Api\BloodController;
use App\Http\Controllers\Api\ShiftController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BirthController;
use App\Http\Controllers\Api\DeathController;
use App\Http\Controllers\Api\AppointmentRequestController;
use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\InvestCatagoriesController;
use App\Http\Controllers\Api\InvestListController;
use App\Http\Controllers\Api\MedicineCatagoriesController;
use App\Http\Controllers\Api\PatientAdmitController;
use App\Http\Controllers\Api\PatientBillDetailController;
use App\Http\Controllers\Api\PatientPaymentController;
use App\Http\Controllers\Api\PatientPrescribeController;
use App\Http\Controllers\Api\PatientTestController;
use App\Http\Controllers\Api\PatientTestDetailController;
use App\Http\Controllers\Api\PrescribeMediController;
use App\Http\Controllers\Api\PrescriptionMediController;
use App\Http\Controllers\Api\PrescriptionController;
use App\Http\Controllers\Api\RoomCatagoriesController;
use App\Http\Controllers\Api\RoomListController;
use App\Http\Controllers\Api\RoleController;
// use App\Http\Controllers\Api\DesignationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function(){
    Route::post('register','_register');
    Route::post('login','_login');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(DoctorController::class)->group(function(){
    Route::get('doctor/index','index');
    Route::post('doctor/create','store');
    Route::get('doctor/{doctor}','show');
    Route::post('/doctor/edit/{id}','update');
    Route::delete('doctor/{doctor}','destroy');
    // Route::post('designation/create','store');
});
Route::controller(PatientController::class)->group(function(){
    Route::get('patient/index','index');
    Route::post('patient/create','store');
    Route::get('patient/{patient}','show');
    Route::post('patient/{id}','update');
    Route::delete('patient/{patient}','destroy');

});
Route::controller(NurseController::class)->group(function(){
    Route::get('nurse/index','index');
    Route::post('nurse/create','store');
    Route::get('nurse/{nurse}','show');
    Route::post('nurse/{id}','update');
    Route::delete('nurse/{nurse}','destroy');
    // Route::post('designation/create','store');
});

Route::controller(EmployeController::class)->group(function(){
    Route::get('employe/index','index');
    Route::post('employe/create','store');
    Route::get('employe/{employe}','show');
    Route::post('employe/{id}','update');
    Route::delete('employe/{employe}','destroy');

});

Route::controller(ScheduleController::class)->group(function(){
    Route::get('schedule/index','index');
    Route::post('schedule/create','store');
    Route::get('schedule/{schedule}','show');
    Route::post('schedule/{id}','update');
    Route::delete('schedule/{schedule}','destroy');
});

Route::controller(DesignationController::class)->group(function(){
    Route::get('designation/index','index');
    Route::post('designation/create','store');
    Route::get('designation/{designation}','show');
    Route::post('designation/{id}','update');
    Route::delete('designation/{designation}','destroy');
});

Route::controller(DepartmentController::class)->group(function(){
    Route::get('department/index','index');
    Route::post('department/create','store');
    Route::get('department/{department}','show');
    Route::post('department/{id}','update');
    Route::delete('department/{department}','destroy');
});

Route::controller(BloodController::class)->group(function(){
    Route::get('blood/index','index');
    Route::post('blood/create','store');
    Route::get('blood/{blood}','show');
    Route::post('blood/{id}','update');
    Route::delete('blood/{blood}','destroy');
});

Route::controller(DayController::class)->group(function(){
    Route::get('day/index','index');
    Route::post('day/create','store');
    Route::get('day/{day}','show');
    Route::post('day/{id}','update');
    Route::delete('day/{day}','destroy');
});

Route::controller(ShiftController::class)->group(function(){
    Route::get('shift/index','index');
    Route::post('shift/create','store');
    Route::get('shift/{shift}','show');
    Route::post('shift/{id}','update');
    Route::delete('shift/{shift}','destroy');
});
Route::controller(RoomCatagoriesController::class)->group(function(){
    Route::get('roomcat/index','index');
    Route::post('roomcat/create','store');
    Route::get('roomcat/{room_cat}','show');
    Route::post('roomcat/{id}','update');
    Route::delete('roomcat/{room_cat}','destroy');
});
Route::controller(RoomListController::class)->group(function(){
    Route::get('roomlist/index','index');
    Route::post('roomlist/create','store');
    Route::get('roomlist/{room_list}','show');
    Route::post('roomlist/{id}','update');
    Route::delete('roomlist/{room_list}','destroy');
});
Route::controller(AppointmentController::class)->group(function(){
    Route::get('appointment/index','index');
    Route::post('appointment/create','store');
    Route::get('appointment/{appointment}','show');
    Route::post('appointment/{id}','update');
    Route::delete('appointment/{appointment}','destroy');
});
Route::controller(RoleController::class)->group(function(){
    Route::get('role/index','index');
});
// Route::controller(DesignationController::class)->group(function(){
//     Route::get('designation','index');
//     Route::get('designation/{designation}','show');
//     Route::put('designation/{designation}','update');
//     Route::delete('designation/{designation}','destroy');
//     Route::post('designation/create','store');
// });
