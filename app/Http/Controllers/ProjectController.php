<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->take(4)->get();
        $projects = Project::orderBy('created_at', 'desc')->paginate(6);
        return view('user.pages.project.index', [
            'title' => 'Tất cả dự án',
            'categories' => $categories,
            'projects' => $projects,
        ]);
    }

    public function showBySlug(Request $request, $projectSlug)
    {
        $project = Project::where('slug', $projectSlug)->first();
        if ($project != null) {
            $images = Image::where('sku', $project->sku)->get();
            return view('user.pages.project.details', [
                'title' => 'Dự án ' . $project->name,
                'project' => $project,
                'images' => $images,
            ]);
        }
        return redirect()->route('home');
    }
}
