<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\CloudinaryService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $cloudinary;

    public function __construct(CloudinaryService $cloudinary)
    {
        $this->cloudinary = $cloudinary;
    }

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
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'headline' => 'required|string|max:255',
            'lead' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            try {
                $folder = config('cloudinary.folders.articles', 'articles');
                $uploadResult = $this->cloudinary->uploadImage($request->file('image'), $folder);

                // Cek apakah upload berhasil
                if (!$uploadResult['success']) {
                    return back()
                        ->with('error', 'Upload failed: ' . $uploadResult['error'])
                        ->withInput();
                }

                // Simpan secure_url dan public_id
                $validated['image'] = $uploadResult['secure_url'];
                $validated['image_public_id'] = $uploadResult['public_id'];
            } catch (\Exception $e) {
                return back()
                    ->with('error', 'Upload failed: ' . $e->getMessage())
                    ->withInput();
            }
        }

        Article::create($validated);

        return redirect()
            ->route('admin.article.index')
            ->with('success', 'Article successfully added');
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
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'headline' => 'required|string|max:255',
            'lead' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            try {
                // Hapus gambar lama dari Cloudinary jika ada
                if ($article->image_public_id) {
                    $deleteResult = $this->cloudinary->deleteImage($article->image_public_id);

                    if (!$deleteResult['success']) {
                        \Log::warning('Failed to delete old image from Cloudinary', [
                            'public_id' => $article->image_public_id,
                            'error' => $deleteResult['error'] ?? 'Unknown error'
                        ]);
                    }
                }

                // Upload gambar baru
                $folder = config('cloudinary.folders.articles', 'articles');
                $uploadResult = $this->cloudinary->uploadImage($request->file('image'), $folder);

                if (!$uploadResult['success']) {
                    return back()
                        ->with('error', 'Upload failed: ' . $uploadResult['error'])
                        ->withInput();
                }

                $validated['image'] = $uploadResult['secure_url'];
                $validated['image_public_id'] = $uploadResult['public_id'];
            } catch (\Exception $e) {
                return back()
                    ->with('error', 'Upload failed: ' . $e->getMessage())
                    ->withInput();
            }
        }

        $article->update($validated);

        return redirect()
            ->route('admin.article.index')
            ->with('success', 'The article has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        try {
            // Hapus gambar dari Cloudinary jika ada
            if ($article->image_public_id) {
                $deleteResult = $this->cloudinary->deleteImage($article->image_public_id);

                if (!$deleteResult['success']) {
                    \Log::warning('Failed to delete image from Cloudinary', [
                        'public_id' => $article->image_public_id,
                        'error' => $deleteResult['error'] ?? 'Unknown error'
                    ]);
                }
            }

            // Hapus artikel dari database
            $article->delete();

            return redirect()
                ->route('admin.article.index')
                ->with('success', 'The article and its images have been successfully deleted');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Delete failed: ' . $e->getMessage());
        }
    }
}
