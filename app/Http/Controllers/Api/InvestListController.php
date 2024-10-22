<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invest_List;
use App\Http\Controllers\Api\BaseController;

class InvestListController extends BaseController
{
    public function index(){
        $data=Invest_List::get();
        return $this->sendResponse($data,"Invest_List data");
    }

    public function store(Request $request){
        $data=Invest_List::create($request->all());
        return $this->sendResponse($data,"Invest_List created successfully");
    }
    public function show(Invest_List $investlist){
        return $this->sendResponse($investlist,"Invest_List created successfully");
    }

    public function update(Request $request,$id){

        $data=Invest_List::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Invest_List updated successfully");
    }

    public function destroy(Invest_List $investlist)
    {
        $investlist=$investlist->delete();
        return $this->sendResponse($investlist,"Invest_List deleted successfully");
    }
}
