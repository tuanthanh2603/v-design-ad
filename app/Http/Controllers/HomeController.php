<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::orderBy('created_at', 'desc')->take(4)->get();
        $products = Product::orderBy('created_at', 'desc')->take(6)->get();
        $topics = Topic::orderBy('created_at', 'desc')->take(4)->get();
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('user.pages.home', [
            'title' => 'Trang chủ',
            'categories' => $categories,
            'products' => $products,
            'topics' => $topics,
            'posts' => $posts,
        ]);
    }
}
