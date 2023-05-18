<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        
        return view('Article');
    }
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'name'=>'required|max:30|min:2',
            'description' =>'required|max:60|min:2',
            'textArticle' =>'required|max:700|min:2',
        ]);
        article::create($request->all());
        return redirect()->route('home');

        
    }
   
}