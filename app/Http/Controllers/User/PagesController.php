<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class PagesController extends Controller
{
    public function landing()
    {
        // Ambil 6 artikel terbaru dari database
        $articles = Article::latest()->take(6)->get();

        // Kirim data articles ke view 'welcome'
        return view('user.landing', [
            'articles' => $articles
        ]);
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
