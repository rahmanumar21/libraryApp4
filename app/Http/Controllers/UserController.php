<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

        $name = "Rahman";
        return view('about1', compact("name"));

    }
}
