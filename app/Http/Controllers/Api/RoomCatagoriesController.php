<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room_Cat;
use App\Http\Controllers\Api\BaseController;

class RoomCatagoriesController extends BaseController
{
    public function index(){
        $data=Room_Cat::get();
        return $this->sendResponse($data,"Room_Cat data");
    }

    public function store(Request $request){
        $data=Room_Cat::create($request->all());
        return $this->sendResponse($data,"Room_Cat created successfully");
    }
    public function show(Room_Cat $room_cat){
        return $this->sendResponse($room_cat,"Room_Cat created successfully");
    }

    public function update(Request $request,$id){

        $data=Room_Cat::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Room_Cat updated successfully");
    }

    public function destroy(Room_Cat $room_cat)
    {
        $room_cat=$room_cat->delete();
        return $this->sendResponse($room_cat,"Room_Cat deleted successfully");
    }
}
