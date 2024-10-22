<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient_Test;
use App\Http\Controllers\Api\BaseController;

class PatientTestController extends BaseController
{
    public function index(){
        $data=Patient_Test::get();
        return $this->sendResponse($data,"Patient_Test data");
    }

    public function store(Request $request){
        $data=Patient_Test::create($request->all());
        return $this->sendResponse($data,"Patient_Test created successfully");
    }
    public function show(Patient_Test $patienttest){
        return $this->sendResponse($patienttest,"Patient_Test created successfully");
    }

    public function update(Request $request,$id){

        $data=Patient_Test::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Patient_Test updated successfully");
    }

    public function destroy(Patient_Test $patienttest)
    {
        $patienttest=$patienttest->delete();
        return $this->sendResponse($patienttest,"Patient_Test deleted successfully");
    }
}
