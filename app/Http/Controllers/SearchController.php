<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchByKeyword(Request $request){
        $rawKeyword = $request->query('s');
        $keyword = htmlspecialchars($rawKeyword);

        if ($rawKeyword !== $keyword) {
            return view('user.pages.search', [
                'title' => 'Kết quả tìm kiếm',
                'hasResults' => null,
            ]);
        }else{
            $keyword = mb_strtolower($keyword);

            $posts = Post::where('title', 'like', '%' . $keyword . '%')
                ->orWhere('content', 'like', '%' . $keyword . '%')
                ->orWhere('description', 'like', '%' . $keyword . '%')
                ->orderBy('title', 'desc')
                ->get();

            $services = Service::where('name', 'like', '%' . $keyword . '%')
                ->orWhere('description', 'like', '%' . $keyword . '%')
                ->get();

            $projects = Project::where('name', 'like', '%' . $keyword . '%')
                ->orWhere('description', 'like', '%' . $keyword . '%')
                ->orderBy('name', 'asc')
                ->get();

            $hasResults = $posts->isNotEmpty() || $projects->isNotEmpty();
            return view('user.pages.search', [
                'title' => 'Kết quả tìm kiếm cho: '.$keyword.'',
                'keyword' => $keyword,
                'projects' => $projects,
                'services' => $services,
                'posts' => $posts,
                'hasResults' => $hasResults,
            ]);
        }
        
    }
    
}
