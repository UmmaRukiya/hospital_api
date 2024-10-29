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
        $data=PatientTest::with('patient','patientadmit','investlist')->get();
        return $this->sendResponse($data,"PatientTest data");
    }

    public function store(Request $request) {
        $request->validate([
            'input.patient_id' => 'required|exists:patients,id',
            'input.admit_id' => 'required|integer',
            'cartItems' => 'required|array',
            'cartItems.*.investigations' => 'required|string',
            'cartItems.*.unit' => 'required|integer|min:1',
            'cartItems.*.price' => 'required|numeric',
        ]);
    
        $bill = PatientTest::create($request->input('input'));
        foreach ($request->input('cartItems') as $item) {
            $bill->details()->create([
                'investigation' => $item['investigations'],
                'amount' => $item['price'],
                'unit' => $item['unit'],
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
