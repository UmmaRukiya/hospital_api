<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedicineCatagories;
use App\Http\Controllers\Api\BaseController;

class MedicineCatagoriesController extends BaseController
{
    public function index(){
        $data=MedicineCatagories::get();
        return $this->sendResponse($data,"MedicineCatagories data");
    }

    public function store(Request $request){
        $data=MedicineCatagories::create($request->all());
        return $this->sendResponse($data,"MedicineCatagories created successfully");
    }
    public function show(MedicineCatagories $medicinecatagories){
        return $this->sendResponse($medicinecatagories,"MedicineCatagories created successfully");
    }

    public function update(Request $request,$id){

        $data=MedicineCatagories::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"MedicineCatagories updated successfully");
    }

    public function destroy(MedicineCatagories $medicinecatagories)
    {
        $medicinecatagories=$medicinecatagories->delete();
        return $this->sendResponse($medicinecatagories,"MedicineCatagories deleted successfully");
    }
}
