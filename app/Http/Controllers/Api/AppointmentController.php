<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Http\Controllers\Api\BaseController;
use App\Models\Patient;

class AppointmentController extends BaseController
{
    public function index(Request $request){
        $data=Appointment::with('doctor','department');
        if($request->ref_id){
            $data=$data->where('ref_id',$request->ref_id);
        }
        $data=$data->get();
        return $this->sendResponse($data,"Appointment data");
    }

    public function store(Request $request){
        $input=$request->all();
        $serial_no=Appointment::where('doctor_id',$request->doctor_id)->where('app_date',$request->app_date)->count() + 1;
        $input['serial']=$serial_no;
        $data=Appointment::create($input);
        $p=Patient::where('contact',$request->patient_contact)->where('name',$request->patient_name)->first();
        if($p){
            $data=$data;
            $data->paitent_id=$p->id;
            $data->save();
        }else{
            $input['name']=$request->patient_name;
            $input['contact']=$request->patient_contact;
            $pdata=Patient::create($input);
            $data=$data;
            $data->paitent_id=$pdata->id;
            $data->save();
        }
        return $this->sendResponse($data,"Appointment created successfully");
    }
    public function show( $id){
        $appointment=Appointment::with('patient')->where('id',$id)->first();
        return $this->sendResponse($appointment,"Appointment created successfully");
    }

    public function update(Request $request,$id){

        $data=Appointment::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Appointment updated successfully");
    }

    public function destroy(Appointment $appointment)
    {
        $appointment=$appointment->delete();
        return $this->sendResponse($appointment,"Appointment deleted successfully");
    }
}
