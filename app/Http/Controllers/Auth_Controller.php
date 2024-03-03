<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class Auth_Controller extends Controller{
    function register_view(Request $request){
        return view('register');
    }

    function login_view(){
        return view('login');
    }

    function sign_in(Request $req){
        $req->validate([
            'contact' => ['max:10']
        ]);

    }

    function sign_up(Request $req){
        $req->validate([
            'contact' => ['max:10']
        ]);
    }
}