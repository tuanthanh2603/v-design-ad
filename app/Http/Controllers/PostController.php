<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPostDetailBySlug(Request $request, $postSlug)
    {
        $post = Post::where('slug', $postSlug)->first();
        if ($post != null) {
            $relatedPosts = Post::where('topic_id', $post->topic_id)
            ->where('id', '!=', $post->id)
            ->limit(3)
            ->get();
            return view('user.pages.post.details', [
                'title' => 'Bài viết ' . $post->title,
                'post' => $post,
                'relatedPosts' => $relatedPosts,
            ]);
        }
        return redirect()->route('home');
    }
}
