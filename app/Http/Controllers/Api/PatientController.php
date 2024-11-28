<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Controllers\Api\BaseController;

class PatientController extends BaseController
{
    public function index(){
        $data=Patient::with('blood')->get();
        return $this->sendResponse($data,"Patient data");
    }

    public function store(Request $request){
        $data=Patient::create($request->all());
        return $this->sendResponse($data,"Patient created successfully");
    }

    // public function store(Request $request){
    //     // Validate incoming request
    //     $validated = $request->validate([
    //         'name' => 'required|string',
    //         'contact' => 'required|unique:patient,contact',
    //         'birth_date' => 'required|date',
    //         'email' => 'required|unique:patient,email|email',
    //         'password' => 'required|min:6',
    //         'c_password' => 'required|same:password',
    //     ]);

        // Hash password before storing
        // $validated['password'] = Hash::make($request->password);

        // Create patient in the database
    //     $patient = Patient::create($validated);

    //     return $this->sendResponse($patient, "Patient created successfully");
    // }


    public function show(Patient $patient){
        return $this->sendResponse($patient,"Patient created successfully");
    }

    public function update(Request $request,$id){

        $data=Patient::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Patient updated successfully");
    }

    public function destroy(Patient $patient)
    {
        $patient=$patient->delete();
        return $this->sendResponse($patient,"Patient deleted successfully");
    }
    public function _login(Request $r)
    {
        $data=Patient::where('contact',$r->contact)
                ->where('password',$r->password)
                ->first()?->toArray();
        if($data){
            $d['token']=$data['id'];
            $d['data']=$data;
            return $this->sendResponse($d,"User login successfully");
        }else{
            return $this->sendError(['error'=>'contact number or password is not correct'],"Unauthorized",400);
        }
    }
    public function _register(Request $r){
        // Validate incoming registration request
        $validated = $r->validate([
            'contact' => 'required|unique:patients,contact',
            'password' => 'required|min:6',
            'birth_date' => 'required|date',
            'name' => 'required|string',
            'email' => 'required|unique:patients,email|email',
            'c_password' => 'required|same:password',
        ]);

        // Hash the password before saving
        // $validated['password'] = Hash::make($r->password);

        // Create new patient
        $patient = Patient::create($validated);

        return $this->sendResponse($patient, "User registered successfully");
    }
}
