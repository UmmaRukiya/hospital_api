<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment_Request;
use App\Http\Controllers\Api\BaseController;

class AppointmentRequestController extends BaseController
{
    public function index(){
        $data=Appointment_Request::get();
        return $this->sendResponse($data,"Appointment_Request data");
    }

    public function store(Request $request){
        $data=Appointment_Request::create($request->all());
        return $this->sendResponse($data,"Appointment_Request created successfully");
    }
    public function show(Appointment_Request $appointmentrequest){
        return $this->sendResponse($appointmentrequest,"Appointment_Request created successfully");
    }

    public function update(Request $request,$id){

        $data=Appointment_Request::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Appointment_Request updated successfully");
    }

    public function destroy(Appointment_Request $appointmentrequest)
    {
        $appointmentrequest=$appointmentrequest->delete();
        return $this->sendResponse($appointmentrequest,"Appointment_Request deleted successfully");
    }
}
