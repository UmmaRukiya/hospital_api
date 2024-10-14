<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nurse;
use App\Http\Controllers\Api\BaseController;
class NurseController extends BaseController
{
    public function index(){
        $data=Nurse::with('role','blood')->get();
        return $this->sendResponse($data,"Nurse data");
    }

    public function store(Request $request){
        $data=Nurse::create($request->all());
        return $this->sendResponse($data,"Nurse created successfully");
    }
    public function show(Nurse $nurse){
        return $this->sendResponse($nurse,"Nurse created successfully");
    }

    public function update(Request $request,$id){

        $data=Nurse::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Nurse updated successfully");
    }

    public function destroy(Nurse $nurse)
    {
        $nurse=$nurse->delete();
        return $this->sendResponse($nurse,"Nurse deleted successfully");
    }
}
