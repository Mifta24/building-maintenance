<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);

        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'headline' => 'required|string|max:255',
            'lead' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // Membuat nama file unik (timestamp + nama asli)
            $imageName = time() . '_' . $file->getClientOriginalName();
            // Pindahkan file ke folder public/images/produk
            $file->move(public_path('images/articles'), $imageName);
            $input['image'] = $imageName;
        }

        Article::create($input);

        return redirect()->route('admin.article.index')->with('success', 'Article successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'headline' => 'required|string|max:255',
            'lead' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($article->image && File::exists(public_path('images/articles/' . $article->image))) {
                File::delete(public_path('images/articles/' . $article->image));
            }

            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/articles'), $imageName);
            $input['image'] = $imageName;
        }

        $article->update($input);

        return redirect()->route('admin.article.index')
            ->with('success', 'the article has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if ($article->image) {
            $image_path = public_path('images/articles/' . $article->image);

            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }

        $article->delete();

        return redirect()->route('admin.article.index')
            ->with('success', 'Artikel beserta gambarnya berhasil dihapus.');
    }
}
