<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function greeting($name)
    {
        $data = ['name'=>$name];
        //return view('welcome',$data);
        return view('test')->with($data);
    }
}
