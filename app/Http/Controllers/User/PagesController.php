<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Service;

class PagesController extends Controller
{
    public function landing()
    {
        $articles = Article::latest()->take(6)->get();

        return view('user.landing', compact('articles'));
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
        $articles = Article::latest()->paginate(6);

        // langsung pindah ke section tertentu
        $articles->fragment('section-blog-posts');

        return view('user.blog', compact('articles'));
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function services()
    {
        $services = Service::latest()->paginate(6);

        return view('user.services', compact('services'));
    }
}
