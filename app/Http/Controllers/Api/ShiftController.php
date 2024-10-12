<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shift;
use App\Http\Controllers\Api\BaseController;

class ShiftController extends BaseController
{
    public function index(){
        $data=Shift::get();
        return $this->sendResponse($data,"Shift data");
    }

    public function store(Request $request){
        $data=Shift::create($request->all());
        return $this->sendResponse($data,"Shift created successfully");
    }
    public function show(Shift $shift){
        return $this->sendResponse($shift,"Shift created successfully");
    }

    public function update(Request $request,$id){

        $data=Shift::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Shift updated successfully");
    }

    public function destroy(Shift $shift)
    {
        $shift=$shift->delete();
        return $this->sendResponse($shift,"Shift deleted successfully");
    }
}
