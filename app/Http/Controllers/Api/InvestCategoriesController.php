<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InvestCat;
use App\Http\Controllers\Api\BaseController;

class InvestCategoriesController extends BaseController
{
    public function index(){
        $data=InvestCat::get();
        return $this->sendResponse($data,"InvestCat data");
    }

    public function store(Request $request){
        $data=InvestCat::create($request->all());
        return $this->sendResponse($data,"InvestCat created successfully");
    }
    public function show(InvestCat $investcat){
        return $this->sendResponse($investcat,"InvestCat created successfully");
    }

    public function update(Request $request,$id){

        $data=InvestCat::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"InvestCat updated successfully");
    }

    public function destroy(InvestCat $investcat)
    {
        $investcat=$investcat->delete();
        return $this->sendResponse($investcat,"InvestCat deleted successfully");
    }
}
