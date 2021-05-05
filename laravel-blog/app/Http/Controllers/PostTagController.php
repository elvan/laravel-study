<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class PostTagController extends Controller
{
    public function index($id)
    {
        $tag = Tag::findOrFail($id);

        return view('posts.index', [
            'posts' => $tag->blogPosts,
            'mostCommented' => [],
            'mostActiveUsers' => [],
            'mostActiveUsersLastMonth' => [],

        ]);
    }
}
