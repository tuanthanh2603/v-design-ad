<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ManageTopicController extends Controller
{
    public function index()
    {
        return view('admin.pages.topic.list', [
            'title' => 'Danh sách chủ đề',
            'topics' => Topic::paginate(10),
        ]);
    }

    public function create(Request $request)
    {
        $topic = new Topic();
        $topic->name = $request->input('name');
        $slug = Str::slug($request->input('name'), '-');

        $existingSlug = Topic::where('slug', $slug)->first();

        if ($existingSlug) {
            $order = Topic::where('slug', 'like', $slug . '-%')->count() + 1;
            $topic->slug = $slug . '-' . $order;
        } else {
            $topic->slug = $slug;
        }
        $topic->status = 1;
        $topic->save();

        if ($topic) {
            Session::flash('success', 'Thêm chủ đề thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi thêm chủ đề');
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $topic = Topic::where('id', $id)->first();
        if($topic) {
            return view('admin.pages.topic.edit', [
                'title' => 'Chỉnh sửa danh mục: ' . $topic->name,
                'topic' => $topic,
                'topics' => Topic::all(),
            ]);
        }
        return redirect()->route('admin.topics.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $topic = Topic::find($id);
        if (!$topic) {
            return redirect()->back()->with('error', 'Chủ đề không tồn tại');
        }
        $topic->name = $request->input('name');
        $slug = Str::slug($request->input('name'), '-');
        $existingSlug = Topic::where('slug', $slug)->where('id', '!=', $id)->first();
        if ($existingSlug) {
            $order = Topic::where('slug', 'like', $slug . '-%')->count() + 1;
            $topic->slug = $slug . '-' . $order;
        } else {
            $topic->slug = $slug;
        }
        $topic->save();
        if ($topic) {
            Session::flash('success', 'Cập nhật chủ đề thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi cập nhật chủ đề');
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $id = (int)$request->input('id');
        $result = Topic::find($id);
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
