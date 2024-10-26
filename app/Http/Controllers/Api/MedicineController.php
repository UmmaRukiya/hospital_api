<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Http\Controllers\Api\BaseController;

class MedicineController extends BaseController
{
    public function index(){
        $data=Medicine::with('medicinecat')->get();
        return $this->sendResponse($data,"Medicine data");
    }

    public function store(Request $request){
        $data=Medicine::create($request->all());
        return $this->sendResponse($data,"Medicine created successfully");
    }
    public function show(Medicine $medicine){
        return $this->sendResponse($medicine,"Medicine created successfully");
    }

    public function update(Request $request,$id){

        $data=Medicine::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Medicine updated successfully");
    }

    public function destroy(Medicine $medicine)
    {
        $medicine=$medicine->delete();
        return $this->sendResponse($medicine,"Medicine deleted successfully");
    }
}
