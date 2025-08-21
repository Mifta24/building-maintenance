<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'imageUrl' => 'nullable|string|max:255',
            'headline' => 'required|string|max:255',
            'lead' => 'required|string|max:255',
            'body' => 'required|text',
        ]);

        Article::create($request->all());

        return redirect()->route('article.index')->with('success', 'Article successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('article.edit', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'imageUrl' => 'nullable|string|max:255',
            'headline' => 'required|string|max:255',
            'lead' => 'required|string|max:255',
            'body' => 'required|text',
        ]);

        $article->update($request->all());

        return redirect()->route('article.index')
            ->with('success', 'the article has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('produk.index')
            ->with('success', 'The article has been successfully deleted.');
    }
}
