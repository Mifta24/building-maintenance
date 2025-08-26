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
        $articles = Article::latest()->paginate(5);
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
            $file->move(public_path('images/article'), $imageName);
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
        return view('article.show', compact('article'));
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'headline' => 'required|string|max:255',
            'lead' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($article->image && File::exists(public_path('images/article/' . $article->image))) {
                File::delete(public_path('images/article/' . $article->image));
            }

            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/article'), $imageName);
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
        // 1. Cek apakah artikel memiliki gambar
        if ($article->image) {
            // 2. Tentukan path lengkap ke file gambar
            $image_path = public_path('images/article/' . $article->image);

            // 3. Cek apakah file benar-benar ada di server
            if (File::exists($image_path)) {
                // 4. Hapus file gambar dari folder public
                File::delete($image_path);
            }
        }

        // 5. Setelah file dihapus, hapus data artikel dari database
        $article->delete();

        // 6. Redirect kembali dengan pesan sukses
        return redirect()->route('admin.article.index')
            ->with('success', 'Artikel beserta gambarnya berhasil dihapus.');
    }
}
