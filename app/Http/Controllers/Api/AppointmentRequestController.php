<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AppointmentRequest;
use App\Models\Doctor;
use App\Http\Controllers\Api\BaseController;

class AppointmentRequestController extends BaseController
{
    public function index(Request $request){
        $data=AppointmentRequest::with('doctor', 'department','schedule');
        if($request->ref_id){
            $data=$data->where('ref_id',$request->ref_id);
        }
        $data=$data->get();
        return $this->sendResponse($data,"AppointmentRequest data");
    }

    public function store(Request $request){
        $data=AppointmentRequest::create($request->all());
        return $this->sendResponse($data,"AppointmentRequest created successfully");
    }
    public function show(AppointmentRequest $appointmentrequest){
        return $this->sendResponse($appointmentrequest,"AppointmentRequest created successfully");
    }

    public function update(Request $request,$id){

        $data=AppointmentRequest::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"AppointmentRequest updated successfully");
    }

    public function destroy(AppointmentRequest $appointmentrequest)
    {
        $appointmentrequest=$appointmentrequest->delete();
        return $this->sendResponse($appointmentrequest,"AppointmentRequest deleted successfully");
    }
}
