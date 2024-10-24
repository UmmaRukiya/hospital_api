<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrescriptionDetail;
use App\Http\Controllers\Api\BaseController;

class PrescriptionDetailController extends BaseController
{
    public function index(){
        $data=PrescriptionDetail::get();
        return $this->sendResponse($data,"PrescriptionDetail data");
    }

    public function store(Request $request){
        $data=PrescriptionDetail::create($request->all());
        return $this->sendResponse($data,"PrescriptionDetail created successfully");
    }
    public function show(PrescriptionDetail $prescriptiondetail){
        return $this->sendResponse($prescriptiondetail,"PrescriptionDetail created successfully");
    }

    public function update(Request $request,$id){

        $data=PrescriptionDetail::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PrescriptionDetail updated successfully");
    }

    public function destroy(PrescriptionDetail $prescriptiondetail)
    {
        $prescriptiondetail=$prescriptiondetail->delete();
        return $this->sendResponse($prescriptiondetail,"PrescriptionDetail deleted successfully");
    }
}
