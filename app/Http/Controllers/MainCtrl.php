<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
    }

    public function index()
    {
        return view('home',[
            'menu' => 'home'
        ]);
    }
}
