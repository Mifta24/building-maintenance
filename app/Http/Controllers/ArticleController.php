<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Services\CloudinaryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class ArticleController extends Controller
{
    private CloudinaryService $cloudinaryService;

    public function __construct(CloudinaryService $cloudinaryService)
    {
        $this->cloudinaryService = $cloudinaryService;
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
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'headline' => 'required|string|max:255',
            'lead' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $uploadResult = $this->cloudinaryService->uploadImage($request->file('image'), "building-maintenance/articles");

            if (!$uploadResult['success']) {
                DB::rollBack();
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['image' => $uploadResult['error']]);
            }

            $validated['image_url'] = $uploadResult['secure_url'];
            $validated['image_public_id'] = $uploadResult['public_id'];
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
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'headline' => 'required|string|max:255',
            'lead' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete old image from Cloudinary if exists
            if ($article->image_public_id) {
                $this->cloudinaryService->deleteImage($article->image_public_id);
            }

            $uploadResult = $this->cloudinaryService->uploadImage($request->file('image'), "building-maintenance/articles");

            if (!$uploadResult['success']) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['image' => $uploadResult['error']]);
            }

            $validated['image_url'] = $uploadResult['secure_url'];
            $validated['image_public_id'] = $uploadResult['public_id'];
        }

        $article->update($validated);

        return redirect()
            ->route('admin.article.index')
            ->with('success', 'Article successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        try {
            // Delete image from Cloudinary if exists
            if ($article->image_public_id) {
                $this->cloudinaryService->deleteImage($article->image_public_id);
            }

            // Delete article from database
            $article->delete();

            return redirect()
                ->route('admin.article.index')
                ->with('success', 'Article successfully deleted');
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.article.index')
                ->with('error', 'Failed to delete article: ' . $e->getMessage());
        }
    }
}
