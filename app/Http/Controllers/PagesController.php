<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //method
    public function index(){
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $about = 'About Us';
        return view('pages.about')->with('title', $about);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'Data Management']
        );
        return view('pages.services')->with($data);
    }
}
