<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientPrescribe;
use App\Http\Controllers\Api\BaseController;

class PatientPrescribeController extends BaseController
{
    public function index(){
        $data=PatientPrescribe::get();
        return $this->sendResponse($data,"PatientPrescribe data");
    }

    public function store(Request $request){
        $data=PatientPrescribe::create($request->all());
        return $this->sendResponse($data,"PatientPrescribe created successfully");
    }
    public function show(PatientPrescribe $patientprescribe){
        return $this->sendResponse($patientprescribe,"PatientPrescribe created successfully");
    }

    public function update(Request $request,$id){

        $data=PatientPrescribe::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PatientPrescribe updated successfully");
    }

    public function destroy(PatientPrescribe $patientprescribe)
    {
        $patientprescribe=$patientprescribe->delete();
        return $this->sendResponse($patientprescribe,"PatientPrescribe deleted successfully");
    }
}
