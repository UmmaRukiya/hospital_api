<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedicineCat;
use App\Http\Controllers\Api\BaseController;

class MedicineCatController extends BaseController
{
    public function index(){
        $data=MedicineCat::get();
        return $this->sendResponse($data,"MedicineCat data");
    }

    public function store(Request $request){
        $data=MedicineCat::create($request->all());
        return $this->sendResponse($data,"MedicineCat created successfully");
    }
    public function show(MedicineCat $medicinecat){
        return $this->sendResponse($medicinecat,"MedicineCat created successfully");
    }

    public function update(Request $request,$id){

        $data=MedicineCat::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"MedicineCat updated successfully");
    }

    public function destroy(MedicineCat $medicinecat)
    {
        $medicinecat=$medicinecat->delete();
        return $this->sendResponse($medicinecat,"MedicineCat deleted successfully");
    }
}
