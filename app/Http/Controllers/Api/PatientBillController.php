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
        $data=PatientBill::with('patient','details','bill')->get();
        return $this->sendResponse($data,"PatientBill data");
    }


// public function store(Request $request) {
//     $request->validate([
//         'input.patient_id' => 'required|exists:patients,id',
//         'input.bill_date' => 'required|date',
//         'cartItems' => 'required|array',
//         'cartItems.*.particulars' => 'required|string',
//         'cartItems.*.unit' => 'required|integer|min:1',
//         'cartItems.*.price' => 'required|numeric',
//     ]);

//     $bill = PatientBill::create($request->input('input'));
//     foreach ($request->input('cartItems') as $item) {
//         $bill->details()->create([
//             'particular' => $item['particulars'],
//             'amount' => $item['price'],
//             'unit' => $item['unit'],
//         ]);
//     }
//     return response()->json(['message' => 'Bill created successfully'], 201);
// }
public function store(Request $request){
    $bill['patient_id']=$request->bill['patient_id'];
    $bill['bill_date']=$request->bill['bill_date'];
    $bill['sub_amount']=$request->bill['sub_amount'];
    $bill['discount']=$request->bill['discount'];
    $bill['tax']=$request->bill['tax'];
    $bill['total_amount']=$request->bill['total_amount'];
    $data=PatientBill::create($bill);

    if($data){
        if($request->bill_d){
            foreach($request->bill_d as $b){
                $bill_d['patient_bill_id']=$data->id;
                $bill_d['particular']=$b['particular'];
                $bill_d['amount']=$b['amount'];
                $details_data=PatientBillDetail::create($bill_d);
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
