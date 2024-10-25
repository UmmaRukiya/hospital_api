<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomList;
use App\Http\Controllers\Api\BaseController;

class RoomListController extends BaseController
{
    public function index(){
        $data=RoomList::with('room_cat')->get();
        return $this->sendResponse($data,"RoomList data");
    }

    public function store(Request $request){
        $data=RoomList::create($request->all());
        return $this->sendResponse($data,"RoomList created successfully");
    }
    public function show(RoomList $roomlist){
        return $this->sendResponse($roomlist,"RoomList created successfully");
    }

    public function update(Request $request,$id){

        $data=RoomList::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"RoomList updated successfully");
    }

    public function destroy(RoomList $roomlist)
    {
        $roomlist=$roomlist->delete();
        return $this->sendResponse($roomlist,"RoomList deleted successfully");
    }
}
