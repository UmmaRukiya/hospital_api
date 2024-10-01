<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function sendResponse($r,$m){
        $response=[
            'success'=>true,
            'data'=>$r,
            'message'=>$m
        ];

        return response()->json($response,200);
    }

    public function sendError($r,$m,$code=400){
        $response=[
            'success'=>false,
            'data'=>$r,
            'message'=>$m
        ];

        return response()->json($response,$code);
    }
}
