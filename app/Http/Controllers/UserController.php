<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registerUser(Request $req){
        
        // dd($req->all());

        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
        ]);

        return redirect('/login');
    }
    public function loginUser(Request $req){
        
        // dd($req->all());

        $req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($req->only('email', 'password'))){
            // dd('log in');
            return redirect('/');
        }else{
            // dd('user not found');
            return back()->with('fail', 'User Not Found');
        }
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}