<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InvestList;
use App\Http\Controllers\Api\BaseController;

class InvestListController extends BaseController
{
    public function index(){
        $data=InvestList::with('investcat')->get();
        return $this->sendResponse($data,"InvestList data");
    }

    public function store(Request $request){
        $data=InvestList::create($request->all());
        return $this->sendResponse($data,"InvestList created successfully");
    }
    public function show(InvestList $investlist){
        return $this->sendResponse($investlist,"InvestList created successfully");
    }

    public function update(Request $request,$id){

        $data=InvestList::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"InvestList updated successfully");
    }

    public function destroy(InvestList $investlist)
    {
        $investlist=$investlist->delete();
        return $this->sendResponse($investlist,"InvestList deleted successfully");
    }
}
