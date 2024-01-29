<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ManageProjectController extends Controller
{
    public function index()
    {
        return view('admin.pages.project.list', [
            'title' => 'Danh sách dự án',
            'categories' => Category::all(),
            'projects' => Project::paginate(10),
        ]);
    }

    public function create(Request $request)
    {
        $category = Category::find($request->input('category_id'));
        if (!$category) {
            Session::flash('error', 'Danh mục không tồn tại');
            return redirect()->back();
        }
        $project = new Project();
        $project->category_id = $request->input('category_id');
        $project->name = $request->input('name');
        $slug = Str::slug($request->input('name'), '-');

        $existingSlug = Project::where('slug', $slug)->first();

        if ($existingSlug) {
            $order = Project::where('slug', 'like', $slug . '-%')->count() + 1;
            $project->slug = $slug . '-' . $order;
        } else {
            $project->slug = $slug;
        }

        $project->sku = 'DA-'. $project->slug;
        $project->image = $request->input('image');
        $project->address = $request->input('address');
        $project->description = $request->input('description');
        $project->save();

        if ($project) {
            Session::flash('success', 'Thêm dự án thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi thêm dự án');
        }

        $albums = $request->input('albums');
        if ($project && $albums) {
            $albumPaths = explode(',', $albums);
    
            foreach ($albumPaths as $albumPath) {
                $trimmedPath = trim($albumPath);
                $image = new Image();
                $image->sku = $project->sku;
                $image->featured = 0;
                $image->url = $trimmedPath;
                $image->save();
            }
        }

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $id = (int)$request->input('id');
        $result = Project::find($id);
        $result->delete();
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công'
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'Có lỗi xảy ra khi xóa'
        ]);
    }
    
}
