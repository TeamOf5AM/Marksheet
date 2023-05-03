<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // dd('hello');
        if($request->session()->has('USER_LOGIN')){
            dd('hello');
            // return redirect('/dashboard');
        }else{
            return route('home');
        }
        return route('home');
    }
    public function register(Request $request)
    {
        $user = User::Create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
       ]);
        // dd($user);
        $token = $user->createToken('Token')->accessToken;
        return redirect('/');
    }

    public function login(Request $request)
    {
        $data = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        // dd($data);
        
        if(auth()->attempt($data))
        {
            $token = auth()->user()->createToken('Token')->accessToken;
            $result = User::select('id')->where('email',$request->email)->get();
            $request->session()->put('USER_LOGIN',true);
            $request->session()->put('USER_ID',$result[0]->id);
            $request->session()->put('USER_NAME',$result[0]->name);
            return redirect('/dashboard');
            // return response()->json(['token'=>$token],200);
        }
        else{
            return response()->json(['error'=>'unauthorized'],401);
        }
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }
}
