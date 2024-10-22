<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient_Test_Detail;
use App\Http\Controllers\Api\BaseController;

class PatientTestDetailController extends BaseController
{
    public function index(){
        $data=Patient_Test_Detail::get();
        return $this->sendResponse($data,"Patient_Test_Detail data");
    }

    public function store(Request $request){
        $data=Patient_Test_Detail::create($request->all());
        return $this->sendResponse($data,"Patient_Test_Detail created successfully");
    }
    public function show(Patient_Test_Detail $patienttestdetail){
        return $this->sendResponse($patienttestdetail,"Patient_Test_Detail created successfully");
    }

    public function update(Request $request,$id){

        $data=Patient_Test_Detail::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Patient_Test_Detail updated successfully");
    }

    public function destroy(Patient_Test_Detail $patienttestdetail)
    {
        $patienttestdetail=$patienttestdetail->delete();
        return $this->sendResponse($patienttestdetail,"Patient_Test_Detail deleted successfully");
    }
}
