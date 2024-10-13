<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrescriptionMedi;
use App\Http\Controllers\Api\BaseController;

class PrescriptionMediController extends BaseController
{
    public function index(){
        $data=PrescriptionMedi::get();
        return $this->sendResponse($data,"PrescriptionMedi data");
    }

    public function store(Request $request){
        $data=PrescriptionMedi::create($request->all());
        return $this->sendResponse($data,"PrescriptionMedi created successfully");
    }
    public function show(PrescriptionMedi $prescriptionmedi){
        return $this->sendResponse($prescriptionmedi,"PrescriptionMedi created successfully");
    }

    public function update(Request $request,$id){

        $data=PrescriptionMedi::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PrescriptionMedi updated successfully");
    }

    public function destroy(PrescriptionMedi $prescriptionmedi)
    {
        $prescriptionmedi=$prescriptionmedi->delete();
        return $this->sendResponse($prescriptionmedi,"PrescriptionMedi deleted successfully");
    }
}
