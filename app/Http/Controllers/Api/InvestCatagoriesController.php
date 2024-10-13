<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InvestCatagories;
use App\Http\Controllers\Api\BaseController;

class InvestCatagoriesController extends BaseController
{
    public function index(){
        $data=InvestCatagories::get();
        return $this->sendResponse($data,"InvestCatagories data");
    }

    public function store(Request $request){
        $data=InvestCatagories::create($request->all());
        return $this->sendResponse($data,"InvestCatagories created successfully");
    }
    public function show(InvestCatagories $investcatagories){
        return $this->sendResponse($investcatagories,"InvestCatagories created successfully");
    }

    public function update(Request $request,$id){

        $data=InvestCatagories::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"InvestCatagories updated successfully");
    }

    public function destroy(InvestCatagories $investcatagories)
    {
        $investcatagories=$investcatagories->delete();
        return $this->sendResponse($investcatagories,"InvestCatagories deleted successfully");
    }
}
