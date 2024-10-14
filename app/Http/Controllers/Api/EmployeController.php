<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;
use App\Http\Controllers\Api\BaseController;

class EmployeController extends BaseController
{
    public function index(){
        $data=Employe::with('role')->get();
        return $this->sendResponse($data,"Employe data");
    }

    public function store(Request $request){
        $data=Employe::create($request->all());
        return $this->sendResponse($data,"Employe created successfully");
    }
    public function show(Employe $employe){
        return $this->sendResponse($employe,"Employe created successfully");
    }

    public function update(Request $request,$id){

        $data=Employe::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Employe updated successfully");
    }

    public function destroy(Employe $employe)
    {
        $employe=$employe->delete();
        return $this->sendResponse($employe,"Employe deleted successfully");
    }
}
