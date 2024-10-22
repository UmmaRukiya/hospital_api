<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient_Bill;
use App\Http\Controllers\Api\BaseController;

class PatientBillController extends BaseController
{
    public function index(){
        $data=Patient_Bill::get();
        return $this->sendResponse($data,"Patient_Bill data");
    }

    public function store(Request $request){
        $data=Patient_Bill::create($request->all());
        return $this->sendResponse($data,"Patient_Bill created successfully");
    }
    public function show(Patient_Bill $patientbill){
        return $this->sendResponse($patientbill,"Patient_Bill created successfully");
    }

    public function update(Request $request,$id){

        $data=Patient_Bill::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Patient_Bill updated successfully");
    }

    public function destroy(Patient_Bill $patientbill)
    {
        $patientbill=$patientbill->delete();
        return $this->sendResponse($patientbill,"Patient_Bill deleted successfully");
    }
}
