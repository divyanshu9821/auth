<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class Auth_Controller extends Controller{
    function sign_up(Request $request){
        return view('signup');
    }

    function login(){
        return view('login');
    }
}