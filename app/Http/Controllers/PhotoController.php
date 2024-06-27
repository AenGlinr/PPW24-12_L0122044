<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('photos.index', compact('photos'));
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('photos', 'public');
            $photo = Photo::create([
                'title' => $request->title,
                'image_path' => $imagePath,
            ]);

            return redirect()->route('photos.index')->with('status', 'Photo added successfully!');
        }

        return back()->withErrors(['image' => 'Failed to upload image.']);
    }

    public function show(string $id)
    {
        $photo = Photo::findOrFail($id);
        return view('photos.show', compact('photo'));
    }

    public function edit(string $id)
    {
        $photo = Photo::findOrFail($id);
        return view('photos.edit', compact('photo'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photo = Photo::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($photo->image_path);
            $imagePath = $request->file('image')->store('photos', 'public');
            $photo->update([
                'title' => $request->title,
                'image_path' => $imagePath,
            ]);
        } else {
            $photo->update([
                'title' => $request->title,
            ]);
        }

        return redirect()->route('photos.index')->with('status', 'Photo updated successfully!');
    }

    public function destroy(string $id)
    {
        $photo = Photo::findOrFail($id);
        Storage::disk('public')->delete($photo->image_path);
        $photo->delete();
        return redirect()->route('photos.index')->with('status', 'Photo deleted successfully!');
    }
}
