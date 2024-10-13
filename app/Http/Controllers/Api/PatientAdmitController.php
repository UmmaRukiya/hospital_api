<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientAdmit;
use App\Http\Controllers\Api\BaseController;

class PatientAdmitController extends BaseController
{
    public function index(){
        $data=PatientAdmit::get();
        return $this->sendResponse($data,"PatientAdmit data");
    }

    public function store(Request $request){
        $data=PatientAdmit::create($request->all());
        return $this->sendResponse($data,"PatientAdmit created successfully");
    }
    public function show(PatientAdmit $patientadmit){
        return $this->sendResponse($patientadmit,"PatientAdmit created successfully");
    }

    public function update(Request $request,$id){

        $data=PatientAdmit::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PatientAdmit updated successfully");
    }

    public function destroy(PatientAdmit $patientadmit)
    {
        $patientadmit=$patientadmit->delete();
        return $this->sendResponse($patientadmit,"PatientAdmit deleted successfully");
    }
}
