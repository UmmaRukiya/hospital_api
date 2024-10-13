<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Death;
use App\Http\Controllers\Api\BaseController;

class DeathController extends BaseController
{
    public function index(){
        $data=Death::get();
        return $this->sendResponse($data,"Death data");
    }

    public function store(Request $request){
        $data=Death::create($request->all());
        return $this->sendResponse($data,"Death created successfully");
    }
    public function show(Death $death){
        return $this->sendResponse($death,"Death created successfully");
    }

    public function update(Request $request,$id){

        $data=Death::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Death updated successfully");
    }

    public function destroy(Death $death)
    {
        $death=$death->delete();
        return $this->sendResponse($death,"Death deleted successfully");
    }
}
