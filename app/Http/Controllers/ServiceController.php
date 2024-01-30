<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showService(){
        $services = Service::all();
        return view('user.pages.service.index2', [
            'title' => 'Dịch vụ',
            'services' => $services,
        ]);
    }
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->take(4)->get();
        $services = Service::orderBy('created_at', 'desc')->paginate(6);
        return view('user.pages.service.index', [
            'title' => 'Tất cả dịch vụ',
            'categories' => $categories,
            'services' => $services,
        ]);
    }

    public function showBySlug(Request $request, $serviceSlug)
    {
        $service = Service::where('slug', $serviceSlug)->first();
        if ($service != null) {
            $images = Image::where('sku', $service->sku)->get();
            return view('user.pages.service.details', [
                'title' => 'Dịch vụ ' . $service->name,
                'service' => $service,
                'images' => $images,
            ]);
        }
        return redirect()->route('home');
    }

    public function showByCategorySlug(Request $request, $categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->first();
        if ($category != null) {
            $services = Service::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(6);
            return view('user.pages.service.showByCategory', [
                'title' => 'Dịch vụ ' . $category->name,
                'categories' => Category::orderBy('created_at', 'desc')->take(4)->get(),
                'services' => $services,
            ]);
        }
        return redirect()->route('home');
    }
}
