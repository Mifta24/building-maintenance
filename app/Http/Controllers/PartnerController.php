<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::latest()->paginate(10);

        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partner.create');
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
            $file->move(public_path('images/partners'), $imageName);
            $input['image'] = $imageName;
        }

        partner::create($input);

        return redirect()->route('admin.partner.index')->with('success', 'partner successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        return view('admin.partner.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($partner->image && File::exists(public_path('images/partners/' . $partner->image))) {
                File::delete(public_path('images/partners/' . $partner->image));
            }

            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/partners'), $imageName);
            $input['image'] = $imageName;
        }

        $partner->update($input);

        return redirect()->route('admin.partner.index')
            ->with('success', 'the partner has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        if ($partner->image) {
            $image_path = public_path('images/partners/' . $partner->image);

            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }

        $partner->delete();

        return redirect()->route('admin.partner.index')
            ->with('success', 'partner beserta gambarnya berhasil dihapus.');
    }
}
