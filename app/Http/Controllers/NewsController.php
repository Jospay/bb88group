<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class NewsController extends Controller
{
    public function index(): Response
    {
        // 1. Capture absolute latest highlight record matching target category 14
        $heroPost = Post::where('CategoryId', 14)
            ->orderBy('postingdate', 'desc')
            ->first();

        // 2. Fetch trailing paginated grid cards, bypassing the active hero item cleanly
        $posts = Post::where('CategoryId', 14)
            ->when($heroPost, function ($query) use ($heroPost) {
                return $query->where('id', '!=', $heroPost->id);
            })
            ->orderBy('postingdate', 'desc')
            ->paginate(12)
            ->withQueryString();

        return Inertia::render('News/NewsMedia', [
            'heroPost' => $heroPost,
            'posts' => $posts
        ]);
    }

    public function show($id): Response
    {
        $post = Post::with(['category'])->findOrFail($id);

        // Sidebar content lookup
        $recentNews = Post::where('CategoryId', 14)
            ->where('id', '!=', $id)
            ->orderBy('postingdate', 'desc')
            ->take(4)
            ->get();

        return Inertia::render('News/NewsDetails', [
            'post' => $post,
            'recentNews' => $recentNews
        ]);
    }
}