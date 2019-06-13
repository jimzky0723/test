<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
        $this->middleware('user');
    }

    public function index()
    {
        echo 'User Page';
    }
}
