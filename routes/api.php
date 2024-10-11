<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\EmployeController;
use App\Http\Controllers\Api\NurseController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\AuthController;
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
    Route::post('doctor/{id}','update');
    Route::delete('doctor/{doctor}','destroy');
    // Route::post('designation/create','store');
});
Route::controller(PatientController::class)->group(function(){
    Route::get('patient/index','index');
    Route::post('patient/create','store');
    Route::get('patient/{patient}','show');
    Route::post('patient/{id}','update');
    Route::delete('patient/{patient}','destroy');
    // Route::post('designation/create','store');
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
// Route::controller(DesignationController::class)->group(function(){
//     Route::get('designation','index');
//     Route::get('designation/{designation}','show');
//     Route::put('designation/{designation}','update');
//     Route::delete('designation/{designation}','destroy');
//     Route::post('designation/create','store');
// });
