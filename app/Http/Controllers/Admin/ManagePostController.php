<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ManagePostController extends Controller
{
    public function index()
    {
        return view('admin.pages.post.list', [
            'title' => 'Danh sách bài viết',
            'topics' => Topic::all(),
            'posts' => Post::paginate(10),
        ]);
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        if($post) {
            return view('admin.pages.post.edit', [
                'title' => 'Chỉnh sửa bài viết: ' . $post->name,
                'post' => $post,
                'posts' => Post::all(),
                'topics' => Topic::all(),
            ]);
        }
        return redirect()->route('admin.pages.post.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|string',
            'topic_id' => 'required|exists:topics,id'
        ]);
        $post = Post::find($id);
        if (!$post) {
            return redirect()->back()->with('error', 'Bài viết không tồn tại');
        }
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->image = $request->input('image');
        $post->topic_id = $request->input('topic_id');
        $slug = Str::slug($request->input('title'), '-');
        $existingSlug = Post::where('slug', $slug)->where('id', '!=', $id)->first();
        if ($existingSlug) {
            $order = Post::where('slug', 'like', $slug . '-%')->count() + 1;
            $post->slug = $slug . '-' . $order;
        } else {
            $post->slug = $slug;
        }
        $post->save();
        if ($post) {
            Session::flash('success', 'Cập nhật bài viết thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi cập nhật bài viết');
        }
        return redirect()->back();
    }

    public function create(Request $request)
    {
        $topic = Topic::find($request->input('topic_id'));
        if (!$topic) {
            Session::flash('error', 'Chủ đề không tồn tại');
            return redirect()->back();
        }

        $post = new Post();
        $post->topic_id = $request->input('topic_id');
        $post->title = $request->input('title');
        $slug = Str::slug($request->input('title'), '-');

        $existingSlug = Post::where('slug', $slug)->first();

        if ($existingSlug) {
            $order = Post::where('slug', 'like', $slug . '-%')->count() + 1;
            $post->slug = $slug . '-' . $order;
        } else {
            $post->slug = $slug;
        }

        $post->image = $request->input('image');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->user_id = Auth::user()->id;
        $post->save();

        if ($post) {
            Session::flash('success', 'Thêm bài viết thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi thêm bài viết');
        }

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $id = (int)$request->input('id');
        $result = Post::find($id);
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
