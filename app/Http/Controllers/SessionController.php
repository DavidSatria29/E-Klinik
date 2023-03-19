<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
class SessionController extends Controller
{
    function login(){
        return view("/log");
    
    }
    function verif (Request $request){
        $validator = validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        } else {
            $values = [
                'email'=>$request->email,
                'password'=>$request->password
            ];
        }
    }
}
