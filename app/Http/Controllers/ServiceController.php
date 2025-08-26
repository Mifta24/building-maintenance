<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            // Membuat nama file unik (timestamp + nama asli)
            $imageName = time() . '_' . $file->getClientOriginalName();
            // Pindahkan file ke folder public/images/
            $file->move(public_path('images/services'), $imageName);
            $input['image'] = $imageName;
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
            // Hapus image lama jika ada
            if ($service->image && File::exists(public_path('images/services/' . $service->image))) {
                File::delete(public_path('images/services/' . $service->image));
            }

            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/services'), $imageName);
            $input['image'] = $imageName;
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
        if ($service->image) {
            $image_path = public_path('images/services/' . $service->image);

            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }

        $service->delete();

        return redirect()->route('admin.service.index')
            ->with('success', 'Service beserta gambarnya berhasil dihapus.');
    }
}
