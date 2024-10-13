<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientTest;
use App\Http\Controllers\Api\BaseController;

class PatientTestController extends BaseController
{
    public function index(){
        $data=PatientTest::get();
        return $this->sendResponse($data,"PatientTest data");
    }

    public function store(Request $request){
        $data=PatientTest::create($request->all());
        return $this->sendResponse($data,"PatientTest created successfully");
    }
    public function show(PatientTest $patienttest){
        return $this->sendResponse($patienttest,"PatientTest created successfully");
    }

    public function update(Request $request,$id){

        $data=PatientTest::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PatientTest updated successfully");
    }

    public function destroy(PatientTest $patienttest)
    {
        $patienttest=$patienttest->delete();
        return $this->sendResponse($patienttest,"PatientTest deleted successfully");
    }
}
