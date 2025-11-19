<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;

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
            'filename' => $filename,
            'filepath' => '/storage/' . $filepath,
        ]);

        return back()->with('success', 'File uploaded successfully.');
    }
}
