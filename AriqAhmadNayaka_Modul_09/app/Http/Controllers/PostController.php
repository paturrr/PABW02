<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
// use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::all();

        $posts->each(function ($item) {
            if ($item->image) {
                $item->image = url('images/' . $item->image);
            }
        });

        return response()->json($posts);
    }

    public function show($id)
    {
        $post = post::find($id);
        if ($post) {
            if ($post->image) {
                $post->image = url('images/' . $post->image);
            }
            return response()->json($post);
        } else {
            return response()->json(['message' => 'Post not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'article' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['title', 'author', 'article']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }
        $post = post::create($data);
        return response()->json($post, 201);
    }

    public function update(Request $request, $id)
    {
        $post = post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'author' => 'sometimes|required|string',
            'article' => 'sometimes|required|string',
            'image' => 'nullable|image|max:2048',
        ]);
        $data = $request->only(['title', 'author', 'article']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }
        if ($post->image && Storage::disk('public')->exists('images/' . $post->image)) {
            Storage::disk('public')->delete('images/' . $post->image);
        }
        $post->update($data);
        return response()->json($post);
    }

    public function destroy($id)
    {
        $post = post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        if ($post->image && Storage::disk('public')->exists('images/' . $post->image)) {
            Storage::disk('public')->delete('images/' . $post->image);
        }
        $post->delete();
        return response()->json(['message' => 'Post deleted successfully']);
    }
}
