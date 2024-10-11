<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Controllers\Api\BaseController;

class PatientController extends BaseController
{
    public function index(){
        $data=Patient::get();
        return $this->sendResponse($data,"Patient data");
    }

    public function store(Request $request){
        $data=Patient::create($request->all());
        return $this->sendResponse($data,"Patient created successfully");
    }
    public function show(Patient $patient){
        return $this->sendResponse($patient,"Patient created successfully");
    }

    public function update(Request $request,$id){

        $data=Patient::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Patient updated successfully");
    }

    public function destroy(Patient $patient)
    {
        $patient=$patient->delete();
        return $this->sendResponse($patient,"Patient deleted successfully");
    }
}
