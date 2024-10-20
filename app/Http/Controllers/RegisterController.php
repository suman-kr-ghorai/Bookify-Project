<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    //
    function register(Request $req){
        // print_r($req->fullName);
        $result=DB::table('users')->insert([
            "name"=>$req->fullName,
            "email"=>$req->email,
            "phone"=>$req->phone,
            "password"=>$req->password,
            "DOB"=>$req->dob,
            "user-type"=>"user",
            "ticket-id"=>"",
        ]);
        if($result)
        echo "Please login User Created";
        else
        echo "Please Register Again";
        return view('login');
    }
}
