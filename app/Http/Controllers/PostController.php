<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\CreateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(CreateRequest $request): Response
    {
        $validated = $request->validated();

        $post = Post::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('posts.create')->with('success', 'Пост успешно создан!');
    }
}
