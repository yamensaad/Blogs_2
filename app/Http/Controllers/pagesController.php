<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\ContactUs;

class pagesController extends Controller
{
    public function index(){
        $data = "this is my data";  
        return view('pages.index',compact('data'));
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function dosend(Request $request ) {

       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body' => 'required|min:10'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $body = $request->input('body');

        SendEmailJob::dispatch($name, $email, $subject, $body);

        return redirect('/contact')->with('success', 'I got your message and will answer your asap.... psych!!!');
        

    }
}
