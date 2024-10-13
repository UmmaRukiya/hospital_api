<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomCatagories;
use App\Http\Controllers\Api\BaseController;

class RoomCatagoriesController extends BaseController
{
    public function index(){
        $data=RoomCatagories::get();
        return $this->sendResponse($data,"RoomCatagories data");
    }

    public function store(Request $request){
        $data=RoomCatagories::create($request->all());
        return $this->sendResponse($data,"RoomCatagories created successfully");
    }
    public function show(RoomCatagories $roomcatagories){
        return $this->sendResponse($roomcatagories,"RoomCatagories created successfully");
    }

    public function update(Request $request,$id){

        $data=RoomCatagories::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"RoomCatagories updated successfully");
    }

    public function destroy(RoomCatagories $roomcatagories)
    {
        $roomcatagories=$roomcatagories->delete();
        return $this->sendResponse($roomcatagories,"RoomCatagories deleted successfully");
    }
}
