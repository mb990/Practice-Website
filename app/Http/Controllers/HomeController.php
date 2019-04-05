<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
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
        return view('pages.redirection');
    }
    public function posts()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $posts = $user->posts;
        return view('home')->with('posts', $posts); 
    }
}
