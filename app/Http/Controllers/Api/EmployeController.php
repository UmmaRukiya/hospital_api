<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;
use App\Http\Controllers\Api\BaseController;

class EmployeController extends BaseController
{
    public function index(){
        $data=Employe::with('role','blood')->get();
        return $this->sendResponse($data,"Employe data");
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
        $data=Employe::create($request->all());
        return $this->sendResponse($data,"Employe created successfully");
    }
    public function show(Employe $employe){
        return $this->sendResponse($employe,"Employe created successfully");
    }

    public function update(Request $request,$id){
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

        $employe=Employe::where('id',$id)->update($request->all());
        return $this->sendResponse($employe,"Employe updated successfully");
    }

    public function destroy(Employe $employe)
    {
        $employe=$employe->delete();
        return $this->sendResponse($employe,"Employe deleted successfully");
    }
}
