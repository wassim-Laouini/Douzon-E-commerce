<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\postRequest;
use App\Models\client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Homecontroller extends Controller
{
  public function test(){
      $user =User::all();
      return json_decode($user);
  } 
    
    public function create(postRequest $request){
        client::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->route('home')->with(['succes' => 'you are registred now please login ']);
    }
    public function loginin(LoginRequest $request){
        
        $go = [
            'email'=> $request->email,
            'password'=>$request->password,
        ];
        if(Auth::attempt($go)){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with(['wrong' => 'check out your information']);
        }

    }
    public function logout(){
        auth::logout();
        return redirect()->route('login');
    }

    
}
