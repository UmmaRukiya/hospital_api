<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Http\Controllers\Api\BaseController;

class DepartmentController extends BaseController
{
    public function index(){
        $data=Department::get();
        return $this->sendResponse($data,"Department data");
    }

    public function store(Request $request){
        $data=Department::create($request->all());
        return $this->sendResponse($data,"Department created successfully");
    }
    public function show(Department $department){
        return $this->sendResponse($department,"Department created successfully");
    }

    public function update(Request $request,$id){

        $data=Department::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Department updated successfully");
    }

    public function destroy(Department $department)
    {
        $department=$department->delete();
        return $this->sendResponse($department,"Department deleted successfully");
    }
}
