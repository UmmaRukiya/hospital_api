<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient_Payment;
use App\Http\Controllers\Api\BaseController;

class PatientPaymentController extends BaseController
{
    public function index(){
        $data=Patient_Payment::get();
        return $this->sendResponse($data,"Patient_Payment data");
    }

    public function store(Request $request){
        $data=Patient_Payment::create($request->all());
        return $this->sendResponse($data,"Patient_Payment created successfully");
    }
    public function show(Patient_Payment $patientpayment){
        return $this->sendResponse($patientpayment,"Patient_Payment created successfully");
    }

    public function update(Request $request,$id){

        $data=Patient_Payment::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Patient_Payment updated successfully");
    }

    public function destroy(Patient_Payment $patientpayment)
    {
        $patientpayment=$patientpayment->delete();
        return $this->sendResponse($patientpayment,"Patient_Payment deleted successfully");
    }
}
