<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function dash(){
        return view("admin/dash");
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
