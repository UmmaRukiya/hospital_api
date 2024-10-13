<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientBill;
use App\Http\Controllers\Api\BaseController;

class PatientBillController extends BaseController
{
    public function index(){
        $data=PatientBill::get();
        return $this->sendResponse($data,"PatientBill data");
    }

    public function store(Request $request){
        $data=PatientBill::create($request->all());
        return $this->sendResponse($data,"PatientBill created successfully");
    }
    public function show(PatientBill $patientbill){
        return $this->sendResponse($patientbill,"PatientBill created successfully");
    }

    public function update(Request $request,$id){

        $data=PatientBill::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PatientBill updated successfully");
    }

    public function destroy(PatientBill $patientbill)
    {
        $patientbill=$patientbill->delete();
        return $this->sendResponse($patientbill,"PatientBill deleted successfully");
    }
}
