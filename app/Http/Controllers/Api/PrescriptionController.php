<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Models\PrescriptionDetail;
use App\Http\Controllers\Api\BaseController;
use App\Models\Patient;

class PrescriptionController extends BaseController
{
    public function index(){
        $data=Prescription::with('patient','details')->get();
        return $this->sendResponse($data,"Prescription data");
    }

    public function store(Request $request){

        $pres['age']=$request->pres['age'];
        $pres['weight']=$request->pres['weight'];
        $pres['temp']=$request->pres['temp'];
        $pres['bp']=$request->pres['bp'];
        $pres['cc']=$request->pres['cc'];
        $pres['inv']=$request->pres['inv'];
        $pres['mh']=$request->pres['mh'];
        $pres['patient_id']=$request->pres['patient_id'];
        $pres['doctor_id']=$request->pres['doctor_id'];
        $pres['advice']=$request->pres['advice'];
        $pres['follow_up']=$request->pres['follow_up'];
        $pres['issue_date']=$request->pres['issue_date'];
        $data=Prescription::create($pres);
        /* update address */
        Patient::where('id',$request->pres['patient_id'])->update(['present_address'=>$request->pres['address']]);
        /* update address*/
        if($data){
            if($request->pres_d){
                foreach($request->pres_d as $p){
                    $pres_d['prescription_id']=$data->id;
                    $pres_d['medicine_id']=$p['medicine_id'];
                    $pres_d['duration']=$p['duration'];
                    $pres_d['dosage']=$p['dosage'];
                    $details_data=PrescriptionDetail::create($pres_d);
                }
            }
        }
    
        return $this->sendResponse($data,"Prescription created successfully");
    }
    public function show( $id){
        $prescription=Prescription::with('patient','details')->where('id',$id)->first();
        return $this->sendResponse($prescription,"Prescription created successfully");
    }

    public function update(Request $request,$id){
        $pres['age']=$request->pres['age'];
        $pres['weight']=$request->pres['weight'];
        $pres['temp']=$request->pres['temp'];
        $pres['bp']=$request->pres['bp'];
        $pres['cc']=$request->pres['cc'];
        $pres['inv']=$request->pres['inv'];
        $pres['mh']=$request->pres['mh'];
        $pres['patient_id']=$request->pres['patient_id'];
        $pres['doctor_id']=$request->pres['doctor_id'];
        $pres['advice']=$request->pres['advice'];
        $pres['follow_up']=$request->pres['follow_up'];
        $pres['issue_date']=$request->pres['issue_date'];
        $data=Prescription::where('id',$id)->update($pres);
        /* update address */
        Patient::where('id',$request->pres['patient_id'])->update(['present_address'=>$request->pres['address']]);
        /* update address*/
        if($data){
            if($request->pres_d){
                PrescriptionDetail::where('prescription_id',$id)->delete();
                foreach($request->pres_d as $p){
                    $pres_d['prescription_id']=$id;
                    $pres_d['medicine_id']=$p['medicine_id'];
                    $pres_d['duration']=$p['duration'];
                    $pres_d['dosage']=$p['dosage'];
                    PrescriptionDetail::create($pres_d);
                }
            }
        }
        
        return $this->sendResponse($data,"Prescription updated successfully");
    }

    public function destroy(Prescription $prescription)
    {
        $prescription=$prescription->delete();
        return $this->sendResponse($prescription,"Prescription deleted successfully");
    }
}
