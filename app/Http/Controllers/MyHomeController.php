<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyHomeController extends Controller
{
    public function index()
    {
        
        return view('Contact');
    }
    public function store(Request $request)
    {
        // student::create($request->all());
        $validated = $request->validate([
            'name'=>'required|max:10|min:2',
            'lastname' =>'required|max:10|min:2',
            'message' =>'required|max:50|min:2',
        ]);

        return redirect()->route('home');

        
    }
   
}
