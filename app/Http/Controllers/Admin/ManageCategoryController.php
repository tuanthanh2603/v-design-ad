<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ManageCategoryController extends Controller
{
    public function index()
    {
        return view('admin.pages.category.list', [
            'title' => 'Danh sách danh mục',
            'categories' => Category::paginate(10),
        ]);
    }

    public function create(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $slug = Str::slug($request->input('name'), '-');

        $existingSlug = Category::where('slug', $slug)->first();

        if ($existingSlug) {
            $order = Category::where('slug', 'like', $slug . '-%')->count() + 1;
            $category->slug = $slug . '-' . $order;
        } else {
            $category->slug = $slug;
        }
        
        $category->image = $request->input('image');
        $category->description = $request->input('description');
        $category->status = 1;
        $category->save();

        if ($category) {
            Session::flash('success', 'Thêm danh mục thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi thêm danh mục');
        }

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $id = (int)$request->input('id');
        $result = Category::find($id);
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
