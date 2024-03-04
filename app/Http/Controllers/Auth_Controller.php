<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Auth_Controller extends Controller
{
    function register_view(Request $request)
    {
        return view('register', ['title' => 'Register']);
    }

    function login_view()
    {
        return view('login', ['title' => 'loginr']);
    }

    function sign_in(Request $req)
    {
        $rules = [
            'contact' => ['max:10', 'required'],
            'password' => ['min:6', 'required']
        ];

        $req->validate($rules);

        
    }

    function sign_up(Request $req)
    {
        $rules = [
            'name' => ['required'],
            'contact' => ['max:10', 'required', 'int'],
            'password' => ['min:6', 'required']
        ];

        $req->validate($rules);

        $name = $req->name;
        $contact = $req->contact;
        $password = $req->password;
        $check_user = DB::table('user')->select('id')->where('contact',$contact)->first();
        if($check_user == null){
            
        }
    }
}