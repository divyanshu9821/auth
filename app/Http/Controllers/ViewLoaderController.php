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
        return view('login', ['title' => 'login']);
    }

    function register_view()
    {
        return view('register', ['title' => 'Register']);
    }

    public function resume_view(){
        return view('resume',['title' => 'Divyanshu Singhal']);
    }

    public function taxcalc_view(){
        return view('taxcalc', ['title' => 'Tax Calc']);
    }
}