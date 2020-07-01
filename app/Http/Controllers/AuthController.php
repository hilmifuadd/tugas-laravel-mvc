<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        return view('register');
    }
    public function selamat(){
        return view('selamat');
    }
    public function selamat_post(Request $request)
    {
        $first_name = $request["first-name"];
        $last_name = $request["last-name"];
        return view('selamat',['data' => $request]);
    }
    //
}
