<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Birth;
use App\Http\Controllers\Api\BaseController;

class BirthController extends BaseController
{
    public function index(){
        $data=Birth::get();
        return $this->sendResponse($data,"Birth data");
    }

    public function store(Request $request){
        $data=Birth::create($request->all());
        return $this->sendResponse($data,"Birth created successfully");
    }
    public function show(Birth $birth){
        return $this->sendResponse($birth,"Birth created successfully");
    }

    public function update(Request $request,$id){

        $data=Birth::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Birth updated successfully");
    }

    public function destroy(Birth $birth)
    {
        $birth=$birth->delete();
        return $this->sendResponse($birth,"Birth deleted successfully");
    }
}
