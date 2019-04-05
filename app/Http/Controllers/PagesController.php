<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('pages.index');
    }

    public function services()
    {
        return view ('pages.services');
    }

    public function about()
    {
        return view ('pages.about');
    }

    public function blog()
    {
        return view ('pages.blog');
    }

    public function contact()
    {
        return view ('pages.contact');
    }
}
