<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nurse;
use App\Http\Controllers\Api\BaseController;
class NurseController extends BaseController
{
    public function index(){
        $data=Nurse::with('role','blood')->get();
        return $this->sendResponse($data,"Nurse data");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        /* for files */
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $imagename=time().rand(1111,9999).".".$f->extension();
                $imagePath=public_path().'/employe';
                if($f->move($imagePath,$imagename)){
                    array_push($files,$imagename);
                }
            }
        }
        $input['image']=implode(',',$files);
        /* /for files */

        $data=Nurse::create($input);
        return $this->sendResponse($data,"Nurse created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Nurse $nurse){
        return $this->sendResponse($nurse,"Nurse created successfully");
    }
/**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();
        /* for files */
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $imagename=time().rand(1111,9999).".".$f->extension();
                $imagePath=public_path().'/employe';
                if($f->move($imagePath,$imagename)){
                    array_push($files,$imagename);
                }
            }
            $input['image']=implode(',',$files);
        }
        unset($input['files']);

        /* /for files */
        $nurse=Nurse::where('id',$id)->update($input);
        return $this->sendResponse($nurse,"Nurse updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nurse $nurse)
    {
        $nurse=$nurse->delete();
        return $this->sendResponse($nurse,"Nurse deleted successfully");
    }
}
