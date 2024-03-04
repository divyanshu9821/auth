<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewLoaderController extends Controller{
    public function home_view(){
        return view('home');
    }

    function login_view()
    {
        $data['title'] = 'login';
        return view('login', $data);
    }

    function register_view()
    {
        $data['title'] = 'Register';
        return view('register', $data);
    }

    public function resume_view(){
        $data['title'] = 'Divyanshu Singhal';
        return view('resume',$data);
    }

    public function taxcalc_view(){
        
    }
}