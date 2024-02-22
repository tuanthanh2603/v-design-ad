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
        $project->is_featured = $request->has('is_featured');
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

    public function edit($id)
    {
        $project = Project::where('id', $id)->first();
        if($project) {
            return view('admin.pages.project.edit', [
                'title' => 'Chỉnh sửa dự án: ' . $project->name,
                'project' => $project,
                'projects' => Project::all(),
                'categories' => Category::all(),
                'images' => Image::where('sku', $project->sku)->get(),
            ]);
        }
        return redirect()->route('admin.pages.project.index');
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'address' => 'required|string',
        //     'image' => 'required|string',
        //     'category_id' => 'required|exists:categories,id'
        // ]);
        $project = Project::find($id);
        if (!$project) {
            return redirect()->back()->with('error', 'Dự án không tồn tại');
        }
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->address = $request->input('address');
        $project->image = $request->input('image');
        $project->category_id = $request->input('category_id');
        $project->is_featured = $request->has('is_featured');
        $slug = Str::slug($request->input('name'), '-');
        $existingSlug = Project::where('slug', $slug)->where('id', '!=', $id)->first();
        if ($existingSlug) {
            $order = Project::where('slug', 'like', $slug . '-%')->count() + 1;
            $project->slug = $slug . '-' . $order;
        } else {
            $project->slug = $slug;
        }
        $project->save();
        if ($project) {
            Session::flash('success', 'Cập nhật dự án thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi cập nhật dự án');
        }

        // Delete all Image
        $images = Image::where('sku', $project->sku)->get();

        if ($images->count() > 0) {
            Image::where('sku', $project->sku)->delete();
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
