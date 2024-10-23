<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invest_Cat;
use App\Http\Controllers\Api\BaseController;

class InvestCategoriesController extends BaseController
{
    public function index(){
        $data=Invest_Cat::get();
        return $this->sendResponse($data,"Invest_Cat data");
    }

    public function store(Request $request){
        $data=Invest_Cat::create($request->all());
        return $this->sendResponse($data,"Invest_Cat created successfully");
    }
    public function show(Invest_Cat $invest_cat){
        return $this->sendResponse($invest_cat,"Invest_Cat created successfully");
    }

    public function update(Request $request,$id){

        $data=Invest_Cat::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"Invest_Cat updated successfully");
    }

    public function destroy(Invest_Cat $invest_cat)
    {
        $invest_cat=$invest_cat->delete();
        return $this->sendResponse($invest_cat,"Invest_Cat deleted successfully");
    }
}
