<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrescribeMedi;
use App\Http\Controllers\Api\BaseController;

class PrescribeMediController extends BaseController
{
    public function index(){
        $data=PrescribeMedi::get();
        return $this->sendResponse($data,"PrescribeMedi data");
    }

    public function store(Request $request){
        $data=PrescribeMedi::create($request->all());
        return $this->sendResponse($data,"PrescribeMedi created successfully");
    }
    public function show(PrescribeMedi $prescribemedi){
        return $this->sendResponse($prescribemedi,"PrescribeMedi created successfully");
    }

    public function update(Request $request,$id){

        $data=PrescribeMedi::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"PrescribeMedi updated successfully");
    }

    public function destroy(PrescribeMedi $prescribemedi)
    {
        $prescribemedi=$prescribemedi->delete();
        return $this->sendResponse($prescribemedi,"PrescribeMedi deleted successfully");
    }
}
