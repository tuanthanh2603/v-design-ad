<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $categories = Category::orderBy('created_at', 'desc')->take(4)->get();
        $services = Service::orderBy('created_at', 'desc')->paginate(6);
        return view('user.pages.service.index', [
            'title' => 'Tất cả dịch vụ',
            'categories' => $categories,
            'services' => $services,
        ]);
    }
}
