<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientTestDetail;
use App\Http\Controllers\Api\BaseController;

class PatientTestDetailController extends BaseController
{
    public function index(){
        $data=PatientTestDetail::get();
        return $this->sendResponse($data,"PatientTestDetail data");
    }

    public function store(Request $request){
        $data=PatientTestDetail::create($request->all());
        return $this->sendResponse($data,"PatientTestDetail created successfully");
    }
    public function show(PatientTestDetail $patienttestdetail){
        return $this->sendResponse($patienttestdetail,"PatientTestDetail created successfully");
    }

    public function update(Request $request,$id){

        $data=PatientTestDetail::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PatientTestDetail updated successfully");
    }

    public function destroy(PatientTestDetail $patienttestdetail)
    {
        $patienttestdetail=$patienttestdetail->delete();
        return $this->sendResponse($patienttestdetail,"PatientTestDetail deleted successfully");
    }
}
