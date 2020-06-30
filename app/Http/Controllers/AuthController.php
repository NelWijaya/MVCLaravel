<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function welcome_post(Request $request){
        $nama_lengkap = $request['first_name'].' '.$request['last_name'];
        // dd($request->all());
        $new = strtoupper($nama_lengkap);
        return view('welcome',compact('new'));
    }
}
