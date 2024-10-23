<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Http\Controllers\Api\BaseController;

class DoctorController extends BaseController
{
    public function index(){
        $data=Doctor::with('role','designation','department')->get();
        return $this->sendResponse($data,"Doctor data");
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

        $data=Doctor::create($input);
        return $this->sendResponse($data,"Doctor created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor){
        return $this->sendResponse($doctor,"Doctor created successfully");
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
        $doctor=Doctor::where('id',$id)->update($input);
        return $this->sendResponse($doctor,"Doctor updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor=$doctor->delete();
        return $this->sendResponse($doctor,"Doctor deleted successfully");
    }
}
