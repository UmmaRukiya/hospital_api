<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient_Admit;
use App\Http\Controllers\Api\BaseController;

class PatientAdmitController extends BaseController
{
    public function index(){
        $data=Patient_Admit::get();
        return $this->sendResponse($data,"Patient_Admit data");
    }

    public function store(Request $request){
        $data=Patient_Admit::create($request->all());
        return $this->sendResponse($data,"Patient_Admit created successfully");
    }
    public function show(Patient_Admit $patientadmit){
        return $this->sendResponse($patientadmit,"Patient_Admit created successfully");
    }

    public function update(Request $request,$id){

        $data=Patient_Admit::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Patient_Admit updated successfully");
    }

    public function destroy(Patient_Admit $patientadmit)
    {
        $patientadmit=$patientadmit->delete();
        return $this->sendResponse($patientadmit,"Patient_Admit deleted successfully");
    }
}
