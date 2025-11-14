<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use App\Services\CloudinaryService;

class ServiceController extends Controller
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
        $services = Service::latest()->paginate(10);

        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $uploadResult = $this->cloudinaryService->uploadImage($request->file('image'), "building-maintenance/services");

            if (!$uploadResult['success']) {
                DB::rollBack();
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['image' => $uploadResult['error']]);
            }

            $validated['image_url'] = $uploadResult['secure_url'];
            $validated['image_public_id'] = $uploadResult['public_id'];
        }

        Service::create($validated);

        return redirect()
            ->route('admin.service.index')
            ->with('success', 'Article successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete old image from Cloudinary if exists
            if ($service->image_public_id) {
                $this->cloudinaryService->deleteImage($service->image_public_id);
            }

            $uploadResult = $this->cloudinaryService->uploadImage($request->file('image'), "building-maintenance/services");

            if (!$uploadResult['success']) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['image' => $uploadResult['error']]);
            }

            $validated['image_url'] = $uploadResult['secure_url'];
            $validated['image_public_id'] = $uploadResult['public_id'];
        }

        $service->update($validated);

        return redirect()
            ->route('admin.service.index')
            ->with('success', 'Service successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        try {
            // Delete image from Cloudinary if exists
            if ($service->image_public_id) {
                $this->cloudinaryService->deleteImage($service->image_public_id);
            }

            // Delete service from database
            $service->delete();

            return redirect()
                ->route('admin.service.index')
                ->with('success', 'Service successfully deleted');
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.service.index')
                ->with('error', 'Failed to delete service: ' . $e->getMessage());
        }
    }
}
