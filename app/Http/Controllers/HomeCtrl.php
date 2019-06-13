<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeCtrl extends Controller
{
    public function index()
    {
    	return view('home',[
    		'menu' => 'home'
    	]);
    }

    public function about()
    {
    	return view('about',[
    		'menu' => 'about',
    		'edit' => true
    	]);
    }

    public function validateLogin(Request $r)
    {
        $login = User::where('username',$r->username)->first();
        if($login)
        {
            if(Hash::check($r->password, $login->password)){
                Session::put('user',$login);
                return redirect('/home');
            }else{
                return redirect()->back()->with('status','error');
            }
        }else{
            return redirect()->back()->with('status','error');
        }
    }
}
