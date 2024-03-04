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

        $messages = [
            'contact.max' => 'invalid mobile number',
            'contact.required' => 'please enter your mobile number',
            'password.min' => 'must have atleast 6 characters',
            'password.required' => 'password is required'
        ];

        $req->validate($rules, $messages);
    }

    function sign_up(Request $req)
    {
        $rules = [
            'name' => ['required'],
            'contact' => ['max:10', 'required'],
            'password' => ['min:6', 'required']
        ];

        $messages = [
            'name.required' => 'please enter your name',
            'contact.max' => 'invalid mobile number',
            'contact.required' => 'please enter your mobile number',
            'password.min' => 'must have atleast 6 characters',
            'password.required' => 'password is required'
        ];

        $req->validate($rules, $messages);
    }
}