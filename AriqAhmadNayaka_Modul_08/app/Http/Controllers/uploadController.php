<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class uploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048', // Maksimal ukuran file 2MB
        ]);

        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $filepath = $file->storeAs('uploads', $filename, 'public');

        upload::create([
            'user_id' => Auth::id(),
            'filename' => $filename,
            'filepath' => '/storage/' . $filepath,
        ]);

        return back()->with('success', 'File uploaded successfully.');
    }

    public function destroy(upload $upload)
    {
        if (!Auth::check() || Auth::id() !== $upload->user_id) {
            return back()->with('error', 'You do not have permission to delete this file.');
        }

        // Hapus file dari storage
        Storage::disk('public')->delete(str_replace('/storage/', '', $upload->filepath));

        // Hapus record dari database
        $upload->delete();

        return back()->with('success', 'File deleted successfully.');
    }
}
