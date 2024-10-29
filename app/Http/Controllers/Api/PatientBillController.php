<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientBill;
use App\Models\PatientBillDetail;
use App\Http\Controllers\Api\BaseController;

class PatientBillController extends BaseController
{
    public function index(){
        $data=PatientBill::with('patient')->get();
        return $this->sendResponse($data,"PatientBill data");
    }


public function store(Request $request) {
    $request->validate([
        'input.patient_id' => 'required|exists:patients,id',
        'input.bill_date' => 'required|date',
        'cartItems' => 'required|array',
        'cartItems.*.particulars' => 'required|string',
        'cartItems.*.unit' => 'required|integer|min:1',
        'cartItems.*.price' => 'required|numeric',
    ]);

    $bill = PatientBill::create($request->input('input'));
    foreach ($request->input('cartItems') as $item) {
        $bill->details()->create([
            'particular' => $item['particulars'],
            'amount' => $item['price'],
            'unit' => $item['unit'],
        ]);
    }
    return response()->json(['message' => 'Bill created successfully'], 201);
}

    public function show(PatientBill $patientbill){
        return $this->sendResponse($patientbill,"PatientBill created successfully");
    }

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
