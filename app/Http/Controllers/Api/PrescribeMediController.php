<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prescribe_Medi;
use App\Http\Controllers\Api\BaseController;

class PrescribeMediController extends BaseController
{
    public function index(){
        $data=Prescribe_Medi::get();
        return $this->sendResponse($data,"Prescribe_Medi data");
    }

    public function store(Request $request){
        $data=Prescribe_Medi::create($request->all());
        return $this->sendResponse($data,"Prescribe_Medi created successfully");
    }
    public function show(Prescribe_Medi $prescribemedi){
        return $this->sendResponse($prescribemedi,"Prescribe_Medi created successfully");
    }

    public function update(Request $request,$id){

        $data=Prescribe_Medi::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Prescribe_Medi updated successfully");
    }

    public function destroy(Prescribe_Medi $prescribemedi)
    {
        $prescribemedi=$prescribemedi->delete();
        return $this->sendResponse($prescribemedi,"Prescribe_Medi deleted successfully");
    }
}
