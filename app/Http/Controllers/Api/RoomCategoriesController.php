<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomCat;
use App\Http\Controllers\Api\BaseController;

class RoomCategoriesController extends BaseController
{
    public function index(){
        $data=RoomCat::get();
        return $this->sendResponse($data,"RoomCat data");
    }

    public function store(Request $request){
        $data=RoomCat::create($request->all());
        return $this->sendResponse($data,"RoomCat created successfully");
    }
    public function show(RoomCat $roomcat){
        return $this->sendResponse($roomcat,"RoomCat created successfully");
    }

    public function update(Request $request,$id){

        $data=RoomCat::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"RoomCat updated successfully");
    }

    public function destroy(RoomCat $roomcat)
    {
        $roomcat=$roomcat->delete();
        return $this->sendResponse($roomcat,"RoomCat deleted successfully");
    }
}
