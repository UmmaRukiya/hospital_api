<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Http\Controllers\Api\BaseController;

class RoleController extends BaseController
{
    public function index(){
        $data=Role::get();
        return $this->sendResponse($data," data");
    }

   
}
