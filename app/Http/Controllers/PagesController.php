<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
        $title = "Welcome to Laravel!!!";
        $description = "This is the main page";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with(['title'=> $title, 'description'=>$description]);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data =[
            'title' => 'Services',
            'services' => ['Web Application', 'Desktop Application', 'SEO']
        ];
        return view('pages.services')->with($data);
    }
}
