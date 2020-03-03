<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function  index(){
        $services = \App\Service::all();

        return view('service.index',compact('services'));
    }

    public function store(){
        $data = request() -> validate([
           'name' => 'required|min:3|max:10'
        ]);

        \App\Service::create($data);
//        dd($data);
//
//        $sevice = new \App\Service();
//
//        $sevice->name = request('name');
//        $sevice->save();

        return redirect() -> back();
    }
}
