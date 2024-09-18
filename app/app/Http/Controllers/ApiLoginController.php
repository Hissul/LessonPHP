<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\HasApiTokens;

class ApiLoginController extends Controller
{    

    public function login(Request $request){

        // в этом случае в Postman шлем jsons
        // $validate = Validator::make($request->json()->all(), [
        //     'email' => ['required', 'email', 'string'],
        //     'password' => ['required', 'string', 'min:3', 'max:64']
        // ]);

        $validate = Validator::make($request->all(), [
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string', 'min:3', 'max:64']
        ]);

        if($validate->fails()){
            return response()->json(['error' => $validate->errors()], 401);
        }

        $user = User::where('email', $request->email)->first();
       

        if(!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'error' => 'Auth failde.'
            ], 401);
        }

        return response()->json([
            'token' => $user->createToken('api')->plainTextToken
        ]);

        // dd($request->json()->all());

    }




}