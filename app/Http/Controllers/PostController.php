<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,user_id',
            'koko_id' => 'required|exists:kokos,koko_id',
            'tag' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::create($validatedData);
        return response()->json($post, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'sometimes|exists:users,user_id',
            'koko_id' => 'sometimes|exists:kokos,koko_id',
            'tag' => 'sometimes|string|max:255',
            'title' => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
        ]);

        $post = Post::findOrFail($id);
        $post->update($validatedData);
        return response()->json($post);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
