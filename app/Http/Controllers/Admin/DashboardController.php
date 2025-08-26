<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Service;
use App\Models\Partner;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArticles = Article::count();
        $totalServices = Service::count();
        $totalPartners = Partner::count();

        return view('admin.index', compact('totalArticles', 'totalServices', 'totalPartners'));
    }
}
