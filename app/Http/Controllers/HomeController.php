<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * REQ <====> RESPONSE
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Current User Id
        $userId = Auth::id();
        
        // find all posts by user id
        // If you want to use this style, do not forget to import App\Post model
        // $posts = Post::where('user_id',$userId)->get();

        $user = User::find($userId);
        $posts = $user->posts;

        return view('home', compact('posts'));
    }
}
