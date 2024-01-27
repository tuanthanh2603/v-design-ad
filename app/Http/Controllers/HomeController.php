<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects = Project::orderBy('created_at', 'desc')->take(4)->get();
        $categories = Category::orderBy('created_at', 'desc')->take(4)->get();
        $products = Product::orderBy('created_at', 'desc')->take(6)->get();
        $topics = Topic::orderBy('created_at', 'desc')->take(4)->get();
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $services = Service::orderBy('created_at', 'desc')->take(3)->get();
        return view('user.pages.home', [
            'title' => 'Trang chủ',
            'projects' => $projects,
            'categories' => $categories,
            'products' => $products,
            'topics' => $topics,
            'posts' => $posts,
            'services' => $services,
        ]);
    }
}
