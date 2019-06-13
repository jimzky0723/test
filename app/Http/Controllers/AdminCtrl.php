<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
        $this->middleware('admin');
    }

    public function index()
    {
        echo 'Admin Page';
    }
}
