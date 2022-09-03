<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;//se agrega el modelo
use Illuminate\Support\Facades\Auth;//se agrega para manejar inicios de secion

class LoginController extends Controller
{
    //
    public function login(Request $request){

        $this->validateLogin($request);
        
        //correcto
        if (Auth::attempt($request->only('email', 'password'))){
            return response()->json([
                'token' => $request->user()->createToken($request->name)->plainTextToken,
                'message' => 'Success'
            ]);
        }
        //falso
        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }

    public function validateLogin(Request $request){
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required'//de que terminal se conecta el usuario
        ]);
    }
}
