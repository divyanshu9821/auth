<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AuthController extends Controller
{

    function hash_pass($pass){
        return hash_hmac('SHA256',$pass,env('PASS_SALT'));
    }
    function sign_up(Request $req)
    {
        $rules = [
            'name' => ['required'],
            'contact' => ['digits:10', 'required'],
            'password' => ['min:6', 'required']
        ];
    
        $req->validate($rules);
    
        $data['name'] = $req->name;
        $data['contact'] = $req->contact;
        $data['password'] = self::hash_pass($req->password);
        $check_user = DB::table('user_cred')->select('id')->where('contact',$data['contact'])->first();
        if($check_user == null){
            DB::table('user_cred')->insert($data);
            session()->flash('success', 'Account registration complete');
            return redirect('login');
        }
        else{
            session()->flash('message','Phone number already exists');
            return redirect()->back()->withInput();
        }
    }
    function sign_in(Request $req)
    {
        $rules = [
            'contact' => ['digits:10', 'required'],
            'password' => ['min:6', 'required']
        ];

        $req->validate($rules);

        $data['contact'] = $req->contact;
        $data['password'] = self::hash_pass($req->password);
        $check_usr = DB::table('user_cred')->select('name')->where($data)->first();
        if($check_usr != null){
            $data['name'] = $check_usr->name;
            return view('taxcalc', $data);
        }
        else{
            session()->flash('message','Account doesnot exists with these credentials. Would you like to create account?');
            return redirect()->back()->withInput();
        }
    }

}