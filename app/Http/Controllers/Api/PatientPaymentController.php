<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientPayment;
use App\Http\Controllers\Api\BaseController;

class PatientPaymentController extends BaseController
{
    public function index(){
        $data=PatientPayment::get();
        return $this->sendResponse($data,"PatientPayment data");
    }

    public function store(Request $request){
        $data=PatientPayment::create($request->all());
        return $this->sendResponse($data,"PatientPayment created successfully");
    }
    public function show(PatientPayment $patientpayment){
        return $this->sendResponse($patientpayment,"PatientPayment created successfully");
    }

    public function update(Request $request,$id){

        $data=PatientPayment::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PatientPayment updated successfully");
    }

    public function destroy(PatientPayment $patientpayment)
    {
        $patientpayment=$patientpayment->delete();
        return $this->sendResponse($patientpayment,"PatientPayment deleted successfully");
    }
}
