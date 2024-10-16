<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Http\Controllers\Api\BaseController;

class PrescriptionController extends BaseController
{
    public function index(){
        $data=Prescription::with('patient')->get();
        return $this->sendResponse($data,"Prescription data");
    }

    public function store(Request $request){
        $data=Prescription::create($request->all());
        return $this->sendResponse($data,"Prescription created successfully");
    }
    public function show(Prescription $prescription){
        return $this->sendResponse($prescription,"Prescription created successfully");
    }

    public function update(Request $request,$id){

        $data=Prescription::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Prescription updated successfully");
    }

    public function destroy(Prescription $prescription)
    {
        $prescription=$prescription->delete();
        return $this->sendResponse($prescription,"Prescription deleted successfully");
    }
}
