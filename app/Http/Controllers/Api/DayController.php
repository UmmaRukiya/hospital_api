<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Day;
use App\Http\Controllers\Api\BaseController;

class DayController extends BaseController
{
    public function index(){
        $data=Day::get();
        return $this->sendResponse($data,"Day data");
    }

    public function store(Request $request){
        $data=Day::create($request->all());
        return $this->sendResponse($data,"Day created successfully");
    }
    public function show(Day $day){
        return $this->sendResponse($day,"Day created successfully");
    }

    public function update(Request $request,$id){

        $data=Day::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Day updated successfully");
    }

    public function destroy(Day $day)
    {
        $day=$day->delete();
        return $this->sendResponse($day,"Day deleted successfully");
    }
}
