<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
        return view('user.landing');
    }

    public function about()
    {
        return view('user.about');
    }

    public function exhibit()
    {
        return view('user.exhibit');
    }

    public function visit()
    {
        return view('user.visit');
    }

    public function partners()
    {
        return view('user.partners');
    }

    public function blog()
    {
        return view('user.blog');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function services()
    {
        return view('user.services');
    }
}
