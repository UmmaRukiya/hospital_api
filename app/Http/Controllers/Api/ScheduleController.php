<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Http\Controllers\Api\BaseController;

class ScheduleController extends BaseController
{
    public function index(){
        $data=Schedule::with('employe','day','shift')->get();
        return $this->sendResponse($data,"Schedule data");
    }

    public function store(Request $request){
        $data=Schedule::create($request->all());
        return $this->sendResponse($data,"Schedule created successfully");
    }
    public function show(Schedule $schedule){
        return $this->sendResponse($schedule,"Schedule created successfully");
    }

    public function update(Request $request,$id){

        $data=Schedule::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Schedule updated successfully");
    }

    public function destroy(Schedule $schedule)
    {
        $schedule=$schedule->delete();
        return $this->sendResponse($schedule,"Schedule deleted successfully");
    }
}
