<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prescription_Medi;
use App\Http\Controllers\Api\BaseController;

class PrescriptionMediController extends BaseController
{
    public function index(){
        $data=Prescription_Medi::get();
        return $this->sendResponse($data,"Prescription_Medi data");
    }

    public function store(Request $request){
        $data=Prescription_Medi::create($request->all());
        return $this->sendResponse($data,"Prescription_Medi created successfully");
    }
    public function show(Prescription_Medi $prescriptionmedi){
        return $this->sendResponse($prescriptionmedi,"Prescription_Medi created successfully");
    }

    public function update(Request $request,$id){

        $data=Prescription_Medi::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Prescription_Medi updated successfully");
    }

    public function destroy(Prescription_Medi $prescriptionmedi)
    {
        $prescriptionmedi=$prescriptionmedi->delete();
        return $this->sendResponse($prescriptionmedi,"Prescription_Medi deleted successfully");
    }
}
