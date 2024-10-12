<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;
use App\Http\Controllers\Api\BaseController;

class DesignationController extends BaseController
{
    public function index(){
        $data=Designation::get();
        return $this->sendResponse($data,"Designation data");
    }

    public function store(Request $request){
        $data=Designation::create($request->all());
        return $this->sendResponse($data,"Designation created successfully");
    }
    public function show(Designation $designation){
        return $this->sendResponse($designation,"Designation created successfully");
    }

    public function update(Request $request,$id){

        $data=Designation::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Designation updated successfully");
    }

    public function destroy(Designation $designation)
    {
        $designation=$designation->delete();
        return $this->sendResponse($designation,"Designation deleted successfully");
    }
}
