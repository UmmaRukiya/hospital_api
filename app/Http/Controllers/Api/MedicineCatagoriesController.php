<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine_Cat;
use App\Http\Controllers\Api\BaseController;

class MedicineCatagoriesController extends BaseController
{
    public function index(){
        $data=Medicine_Cat::get();
        return $this->sendResponse($data,"Medicine_Cat data");
    }

    public function store(Request $request){
        $data=Medicine_Cat::create($request->all());
        return $this->sendResponse($data,"Medicine_Cat created successfully");
    }
    public function show(Medicine_Cat $medicinecatagories){
        return $this->sendResponse($medicinecatagories,"Medicine_Cat created successfully");
    }

    public function update(Request $request,$id){

        $data=Medicine_Cat::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Medicine_Cat updated successfully");
    }

    public function destroy(Medicine_Cat $medicinecatagories)
    {
        $medicinecatagories=$medicinecatagories->delete();
        return $this->sendResponse($medicinecatagories,"Medicine_Cat deleted successfully");
    }
}
