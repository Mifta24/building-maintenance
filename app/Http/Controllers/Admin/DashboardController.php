<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Service;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArticles = Article::count();
        $totalServices = Service::count();
        $totalContacts = Contact::count();
        $recentContacts = Contact::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.index', compact('totalArticles', 'totalServices', 'totalContacts', 'recentContacts'));
    }
}
