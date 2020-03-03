<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HelloController extends Controller
{
    public function index(){
        $coolString = 'Hello from Controller!!!';

        return view('subviews.hello',compact('coolString'));
    }

    public function  contact(){
        return view('contact');
    }


}
