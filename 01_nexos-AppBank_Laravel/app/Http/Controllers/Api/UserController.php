<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
   
 
    public function store(Request $request)
    {
        //
        $input=$request->all();
        $input['password']=Hash::make($request->password);
        $user=User::create($input);
        return response()->json($user,201);
    }

 
    public function login(Request $request)
    {
        //
        $user=User::whereEmail($request->email)->first();

        if(!is_null($user) && Hash::check($request->password,$user->password))
        {
            $user->api_token=Str::random(100);
            $user->save();
            return response()->json(
                [
                  'res'=>true,
                  'token'=> $user->api_token,
                  'data'=> $user,
                  'message'=>'Bienvennido al sistema'  
                ],200);

        }

        else {
            return response()->json(
                [
                  'res'=>false,
                  'message'=>'Cuenta o password incorrecto'  
                ],200);

        }
    }
    

    public function logout()
    {
        $user= auth()->user();
        //dd($user);
        $user->api_token=null;
        $user->save();

        return response()->json(
            [
              'res'=>true,
              'message'=>'Bye'  
            ],200);
    }
    
}
