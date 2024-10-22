<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient_Bill_Detail;
use App\Http\Controllers\Api\BaseController;

class PatientBillDetailController extends BaseController
{
    public function index(){
        $data=Patient_Bill_Detail::get();
        return $this->sendResponse($data,"Patient_Bill_Detail data");
    }

    public function store(Request $request){
        $data=Patient_Bill_Detail::create($request->all());
        return $this->sendResponse($data,"Patient_Bill_Detail created successfully");
    }
    public function show(Patient_Bill_Detail $patientbilldetail){
        return $this->sendResponse($patientbilldetail,"Patient_Bill_Detail created successfully");
    }

    public function update(Request $request,$id){

        $data=Patient_Bill_Detail::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Patient_Bill_Detail updated successfully");
    }

    public function destroy(Patient_Bill_Detail $patientbilldetail)
    {
        $patientbilldetail=$patientbilldetail->delete();
        return $this->sendResponse($patientbilldetail,"Patient_Bill_Detail deleted successfully");
    }
}
