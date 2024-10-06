<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Http\Controllers\Api\BaseController;

class DoctorController extends BaseController
{
    public function index(){
        $data=Doctor::get();
        return $this->sendResponse($data,"Doctor data");
    }

    public function store(Request $request){
        $data=Doctor::create($request->all());
        return $this->sendResponse($data,"Doctor created successfully");
    }
    public function show(Doctor $doctor){
        return $this->sendResponse($doctor,"Doctor created successfully");
    }

    public function update(Request $request,$id){

        $data=Doctor::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Doctor updated successfully");
    }

    public function destroy(Doctor $doctor)
    {
        $doctor=$doctor->delete();
        return $this->sendResponse($doctor,"Doctor deleted successfully");
    }
}
