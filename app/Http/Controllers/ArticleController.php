<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

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
            $folder = Config::get('cloudinary.folders.articles', 'articles');
            $imageUrl = (new Article)->uploadImageToCloudinary($file, $folder);

            if ($imageUrl) {
                $input['image'] = $imageUrl;
            } else {
                return redirect()->back()
                    ->with('error', 'Failed to upload image to Cloudinary')
                    ->withInput();
            }
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
            // Hapus image lama dari Cloudinary jika ada
            if ($article->image) {
                $article->deleteImageFromCloudinary($article->image);
            }

            $file = $request->file('image');
            $folder = Config::get('cloudinary.folders.articles', 'articles');
            $imageUrl = $article->uploadImageToCloudinary($file, $folder);

            if ($imageUrl) {
                $input['image'] = $imageUrl;
            } else {
                return redirect()->back()
                    ->with('error', 'Failed to upload image to Cloudinary')
                    ->withInput();
            }
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
        // Image deletion from Cloudinary is handled in the model's boot method
        $article->delete();

        return redirect()->route('admin.article.index')
            ->with('success', 'The article and its images have been successfully deleted.');
    }
}
