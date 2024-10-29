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
use App\Http\Controllers\Api\InvestCategoriesController;
use App\Http\Controllers\Api\InvestListController;
use App\Http\Controllers\Api\MedicineCatController;
use App\Http\Controllers\Api\PatientAdmitController;
// use App\Http\Controllers\Api\PatientBillDetailController;
use App\Http\Controllers\Api\PatientBillController;
use App\Http\Controllers\Api\PatientPaymentController;

use App\Http\Controllers\Api\PatientTestController;
// use App\Http\Controllers\Api\PatientTestDetailController;
use App\Http\Controllers\Api\MedicineController;
use App\Http\Controllers\Api\PrescriptionDetailController;
use App\Http\Controllers\Api\PrescriptionController;
use App\Http\Controllers\Api\RoomCategoriesController;
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

Route::controller(RoleController::class)->group(function(){
    Route::get('role/index','index');
});

Route::controller(DoctorController::class)->group(function(){
    Route::get('doctor/index','index');
    Route::post('doctor/create','store');
    Route::get('doctor/{doctor}','show');
    Route::post('/doctor/{id}','update');
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
Route::controller(RoomCategoriesController::class)->group(function(){
    Route::get('roomcat/index','index');
    Route::post('roomcat/create','store');
    Route::get('roomcat/{roomcat}','show');
    Route::post('roomcat/{id}','update');
    Route::delete('roomcat/{roomcat}','destroy');
});
Route::controller(RoomListController::class)->group(function(){
    Route::get('roomlist/index','index');
    Route::post('roomlist/create','store');
    Route::get('roomlist/{roomlist}','show');
    Route::post('roomlist/{id}','update');
    Route::delete('roomlist/{roomlist}','destroy');
});
Route::controller(AppointmentController::class)->group(function(){
    Route::get('appointment/index','index');
    Route::post('appointment/create','store');
    Route::get('appointment/{appointment}','show');
    Route::post('appointment/{id}','update');
    Route::delete('appointment/{appointment}','destroy');
});

Route::controller(PrescriptionController::class)->group(function(){
    Route::get('prescription/index','index');
    Route::post('prescription/create','store');
    Route::get('prescription/{prescription}','show');
    Route::post('prescription/edit/{id}','update');
    Route::delete('prescription/{prescription}','destroy');
});

Route::controller(InvestCategoriesController::class)->group(function(){
    Route::get('investcat/index','index');
    Route::post('investcat/create','store');
    Route::get('investcat/{investcat}','show');
    Route::post('investcat/{id}','update');
    Route::delete('investcat/{investcat}','destroy');
});

Route::controller(InvestListController::class)->group(function(){
    Route::get('investlist/index','index');
    Route::post('investlist/create','store');
    Route::get('investlist/{investlist}','show');
    Route::post('investlist/{id}','update');
    Route::delete('investlist/{investlist}','destroy');
});

Route::controller(MedicineCatController::class)->group(function(){
    Route::get('medicinecat/index','index');
    Route::post('medicinecat/create','store');
    Route::get('medicinecat/{medicinecat}','show');
    Route::post('medicinecat/{id}','update');
    Route::delete('medicinecat/{medicinecat}','destroy');
});

Route::controller(PatientAdmitController::class)->group(function(){
    Route::get('patientadmit/index','index');
    Route::post('patientadmit/create','store');
    Route::get('patientadmit/{patientadmit}','show');
    Route::post('patientadmit/{id}','update');
    Route::delete('patientadmit/{patientadmit}','destroy');
});

Route::controller(PatientBillController::class)->group(function(){
    Route::get('patientbill/index','index');
    Route::post('patientbill/create','store');
    Route::get('patientbill/{patientbill}','show');
    Route::post('patientbill/{id}','update');
    Route::delete('patientbill/{patientbill}','destroy');
});

Route::controller(PatientPaymentController::class)->group(function(){
    Route::get('patient_payment/index','index');
    Route::post('patient_payment/create','store');
    Route::get('patient_payment/{patient_payment}','show');
    Route::post('patient_payment/{id}','update');
    Route::delete('patient_payment/{patient_payment}','destroy');
});

Route::controller(MedicineController::class)->group(function(){
    Route::get('medicine/index','index');
    Route::post('medicine/create','store');
    Route::get('medicine/{medicine}','show');
    Route::post('medicine/{id}','update');
    Route::delete('medicine/{medicine}','destroy');
});

Route::controller(PatientTestController::class)->group(function(){
    Route::get('patienttest/index','index');
    Route::post('patienttest/create','store');
    Route::get('patienttest/{patienttest}','show');
    Route::post('patienttest/{id}','update');
    Route::delete('patienttest/{patienttest}','destroy');
});

// Route::controller(PatientTestDetailController::class)->group(function(){
//     Route::get('patient_test_detail/index','index');
//     Route::post('patient_test_detail/create','store');
//     Route::get('patient_test_detail/{patient_test_detail}','show');
//     Route::post('patient_test_detail/{id}','update');
//     Route::delete('patient_test_detail/{patient_test_detail}','destroy');
// });



Route::controller(BirthController::class)->group(function(){
    Route::get('birth/index','index');
    Route::post('birth/create','store');
    Route::get('birth/{birth}','show');
    Route::post('birth/{id}','update');
    Route::delete('birth/{birth}','destroy');
});

Route::controller(DeathController::class)->group(function(){
    Route::get('death/index','index');
    Route::post('death/create','store');
    Route::get('death/{death}','show');
    Route::post('death/{id}','update');
    Route::delete('death/{death}','destroy');
});

Route::controller(AppointmentRequestController::class)->group(function(){
    Route::get('appointment_request/index','index');
    Route::post('appointment_request/create','store');
    Route::get('appointment_request/{appointment_request}','show');
    Route::post('appointment_request/{id}','update');
    Route::delete('appointment_request/{appointment_request}','destroy');
});
// Route::controller(DesignationController::class)->group(function(){
//     Route::get('designation','index');
//     Route::get('designation/{designation}','show');
//     Route::put('designation/{designation}','update');
//     Route::delete('designation/{designation}','destroy');
//     Route::post('designation/create','store');
// });
