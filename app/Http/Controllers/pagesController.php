<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        $data = "this is my data";  
        return view('pages.index',compact('data'));
    }
}
