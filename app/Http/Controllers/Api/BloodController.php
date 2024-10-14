<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blood;
use App\Http\Controllers\Api\BaseController;

class BloodController extends BaseController
{
    public function index(){
        $data=Blood::get();
        return $this->sendResponse($data,"Blood data");
    }

    public function store(Request $request){
        $data=Blood::create($request->all());
        return $this->sendResponse($data,"Blood created successfully");
    }
    public function show(Blood $blood){
        return $this->sendResponse($blood,"Blood created successfully");
    }

    public function update(Request $request,$id){

        $data=Blood::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Blood updated successfully");
    }

    public function destroy(Blood $blood)
    {
        $blood=$blood->delete();
        return $this->sendResponse($blood,"Blood deleted successfully");
    }
}
