<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient_Prescribe;
use App\Http\Controllers\Api\BaseController;

class PatientPrescribeController extends BaseController
{
    public function index(){
        $data=Patient_Prescribe::get();
        return $this->sendResponse($data,"Patient_Prescribe data");
    }

    public function store(Request $request){
        $data=Patient_Prescribe::create($request->all());
        return $this->sendResponse($data,"Patient_Prescribe created successfully");
    }
    public function show(Patient_Prescribe $patientprescribe){
        return $this->sendResponse($patientprescribe,"Patient_Prescribe created successfully");
    }

    public function update(Request $request,$id){

        $data=Patient_Prescribe::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Patient_Prescribe updated successfully");
    }

    public function destroy(Patient_Prescribe $patientprescribe)
    {
        $patientprescribe=$patientprescribe->delete();
        return $this->sendResponse($patientprescribe,"Patient_Prescribe deleted successfully");
    }
}
