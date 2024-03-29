<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Topic;

class HomeController extends Controller
{
    public function index(){
        $projects = Project::orderBy('id')->take(6)->get();
        $projects_featured = Project::where('is_featured', true)->get();
        $categories = Category::orderBy('id', 'desc')->take(2)->get();
        $products = Product::orderBy('created_at', 'desc')->take(6)->get();
        $topics = Topic::orderBy('created_at', 'desc')->take(4)->get();
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $services = Service::orderBy('id')->take(3)->get();
        $services_2 = Service::orderBy('id')->get();
        $categories_2 = Category::orderBy('id', 'desc')->get();

        return view('user.pages.home', [
            'title' => 'Trang chủ',
            'projects' => $projects,
            'projects_featured' => $projects_featured,
            'categories' => $categories,
            'products' => $products,
            'topics' => $topics,
            'posts' => $posts,
            'services' => $services,
            'services_2' => $services_2,
            'categories_2' => $categories_2,

        ]);
    }

    public function showIntroduce(){
        return  view('user.pages.introduce', [
            'title' => 'Giới thiệu'
        ]);
    }
    public function showNews(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return  view('user.pages.news.index', [
            'title' => 'Xu hướng thiết kế',
            'posts' => $posts,
        ]);
    }
}
