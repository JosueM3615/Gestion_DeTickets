<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('session.login');
    }

    public function login(Request $request){
        //Logica de inicio de session
        dd($request);
    }

    public function register(){
        
    }
}
