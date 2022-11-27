<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farm;

class HomeController extends Controller
{
    //
    public function dashboard(){
        return view('dashboard');
    }
    public function add(){
        return view('add');
    }
    public function view(){
        return view('view', ['FarmList'=>Farm::all()]);
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    // public function signUp(){
    //     return view('register');
    // }
}