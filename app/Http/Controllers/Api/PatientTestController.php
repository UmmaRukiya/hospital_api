<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientTest;
use App\Models\PatientTestDetail;
use App\Http\Controllers\Api\BaseController;

class PatientTestController extends BaseController
{
    public function index(){
        $data=PatientTest::with('patient','patientadmit','investlist','details')->get();
        return $this->sendResponse($data,"PatientTest data");
    }

    public function store(Request $request) {
        $request->validate([
            'input.patient_id' => 'required|exists:patients,id',
            'cartItems' => 'required|array',
            'cartItems.*.id' => 'required',
            'cartItems.*.price' => 'required|numeric',
        ]);

        $bill = PatientTest::create($request->input('input'));
        foreach ($request->input('cartItems') as $item) {
            $bill->details()->create([
                'inv_list_id' => $item['id'],
                'amount' => $item['price']
            ]);
        }
        return response()->json(['message' => 'PatientTest created successfully'], 201);
    }

    public function show(PatientTest $patienttest){
        return $this->sendResponse($patienttest,"PatientTest created successfully");
    }

    public function update(Request $request,$id){

        $data=PatientTest::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PatientTest updated successfully");
    }

    public function destroy(PatientTest $patienttest)
    {
        $patienttest=$patienttest->delete();
        return $this->sendResponse($patienttest,"PatientTest deleted successfully");
    }
}
