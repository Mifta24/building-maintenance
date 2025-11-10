<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArticles = Article::count();
        $totalServices = Service::count();

        return view('admin.index', compact('totalArticles', 'totalServices', 'totalPartners'));
    }
}
