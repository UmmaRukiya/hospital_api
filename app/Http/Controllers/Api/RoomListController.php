<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room_List;
use App\Http\Controllers\Api\BaseController;

class RoomListController extends BaseController
{
    public function index(){
        $data=Room_List::get();
        return $this->sendResponse($data,"Room_List data");
    }

    public function store(Request $request){
        $data=Room_List::create($request->all());
        return $this->sendResponse($data,"Room_List created successfully");
    }
    public function show(Room_List $room_list){
        return $this->sendResponse($room_list,"Room_List created successfully");
    }

    public function update(Request $request,$id){

        $data=Room_List::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Room_List updated successfully");
    }

    public function destroy(Room_List $room_list)
    {
        $room_list=$room_list->delete();
        return $this->sendResponse($room_list,"Room_List deleted successfully");
    }
}
