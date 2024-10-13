<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientBillDetail;
use App\Http\Controllers\Api\BaseController;

class PatientBillDetailController extends BaseController
{
    public function index(){
        $data=PatientBillDetail::get();
        return $this->sendResponse($data,"PatientBillDetail data");
    }

    public function store(Request $request){
        $data=PatientBillDetail::create($request->all());
        return $this->sendResponse($data,"PatientBillDetail created successfully");
    }
    public function show(PatientBillDetail $patientbilldetail){
        return $this->sendResponse($patientbilldetail,"PatientBillDetail created successfully");
    }

    public function update(Request $request,$id){

        $data=PatientBillDetail::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PatientBillDetail updated successfully");
    }

    public function destroy(PatientBillDetail $patientbilldetail)
    {
        $patientbilldetail=$patientbilldetail->delete();
        return $this->sendResponse($patientbilldetail,"PatientBillDetail deleted successfully");
    }
}
