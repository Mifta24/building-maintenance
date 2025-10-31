<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ServiceController extends Controller
{
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
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $folder = Config::get('cloudinary.folders.services', 'services');
            $imageUrl = (new Service)->uploadImageToCloudinary($file, $folder);

            if ($imageUrl) {
                $input['image'] = $imageUrl;
            } else {
                return redirect()->back()
                    ->with('error', 'Failed to upload image to Cloudinary')
                    ->withInput();
            }
        }

        Service::create($input);

        return redirect()->route('admin.service.index')->with('success', 'service successfully added');
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
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            // Hapus image lama dari Cloudinary jika ada
            if ($service->image) {
                $service->deleteImageFromCloudinary($service->image);
            }

            $file = $request->file('image');
            $folder = Config::get('cloudinary.folders.services', 'services');
            $imageUrl = $service->uploadImageToCloudinary($file, $folder);

            if ($imageUrl) {
                $input['image'] = $imageUrl;
            } else {
                return redirect()->back()
                    ->with('error', 'Failed to upload image to Cloudinary')
                    ->withInput();
            }
        }

        $service->update($input);

        return redirect()->route('admin.service.index')
            ->with('success', 'the service has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // Image deletion from Cloudinary is handled in the model's boot method
        $service->delete();

        return redirect()->route('admin.service.index')
            ->with('success', 'Service beserta gambarnya berhasil dihapus.');
    }
}
