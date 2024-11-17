<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientBill;
use App\Models\PatientBillDetail;
use App\Models\PatientAdmit;

use App\Http\Controllers\Api\BaseController;

class PatientBillController extends BaseController
{
    public function index(){
        $data=PatientBill::with('patient','details','patientadmit')->get();
        return $this->sendResponse($data,"PatientBill data");
    }


public function store(Request $request){
    $input['patient_id']=$request->input['patient_id'];
    $input['admit_id']=$request->input['admit_id'];
    $input['bill_date']=$request->input['bill_date'];
    $input['sub_amount']=$request->input['sub_amount'];
    $input['discount']=$request->input['discount'];
    $input['tax']=$request->input['tax'];
    $input['total_amount']=$request->input['total_amount'];
    $input['pay']=$request->input['paid'];
    $data=PatientBill::create($input);

    if($data){
        if($request->testdata){
            foreach($request->testdata as $b){
                $testdata['patient_bill_id']=$data->id;
                $testdata['particular']=$b['name'];
                $testdata['amount']=$b['price'];
                $details_data=PatientBillDetail::create($testdata);
            }
        }
    }

}
 public function show($id){
    $bill=PatientBill::with('patient','details')->where ('id',$id)->first();
    return $this->sendResponse($bill,"PatientBill created successfully");
 }

    // public function show(PatientBill $patientbill){
    //     return $this->sendResponse($patientbill,"PatientBill created successfully");
    // }

    public function update(Request $request,$id){

        $data=PatientBill::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PatientBill updated successfully");
    }

    public function destroy(PatientBill $patientbill)
    {
        $patientbill=$patientbill->delete();
        return $this->sendResponse($patientbill,"PatientBill deleted successfully");
    }
}
