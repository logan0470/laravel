<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function healthCheck(Request $request){
         return response()->json($request->all(), 200);;
    }

}
