<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Models\User;
use Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        dd($request);
       $user = User::Create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
       ]);
       $token = $user->createToken('Token')->accessToken;
       return response()->json(['token'=>$token,'user'=>$user],200);
    }
    public function login(Request $request)
    {
        $data = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        
        if(auth()->attempt($data))
        {
            $token = auth()->user()->createToken('Token')->accessToken;
            return response()->json(['token'=>$token],200);
        }
        else{
            return response()->json(['error'=>'unauthorized'],401);
        }
    }

    public function userInfo()
    {
       $user = auth()->user();
       return response()->json(['user'=>$user],200);
    }
}
