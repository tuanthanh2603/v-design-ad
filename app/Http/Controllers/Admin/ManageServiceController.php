<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ManageServiceController extends Controller
{
    public function index()
    {
        return view('admin.pages.service.list', [
            'title' => 'Danh sách dịch vụ',
            'services' => Service::paginate(10),
        ]);
    }

    public function create(Request $request)
    {
        $service = new Service();
        $service->name = $request->input('name');
        $slug = Str::slug($request->input('name'), '-');

        $existingSlug = Service::where('slug', $slug)->first();

        if ($existingSlug) {
            $order = Service::where('slug', 'like', $slug . '-%')->count() + 1;
            $service->slug = $slug . '-' . $order;
        } else {
            $service->slug = $slug;
        }
        
        $service->image = $request->input('image');
        $service->description = $request->input('description');
        $service->save();

        if ($service) {
            Session::flash('success', 'Thêm dịch vụ thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi thêm dịch vụ');
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $service = Service::where('id', $id)->first();
        if($service) {
            return view('admin.pages.service.edit', [
                'title' => 'Chỉnh sửa dịch vụ: ' . $service->name,
                'service' => $service,
                'services' => Service::all(),
            ]);
        }
        return redirect()->route('admin.pages.service.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|string',
            'description' => 'required|string',
        ]);
        $service = Service::find($id);
        if (!$service) {
            return redirect()->back()->with('error', 'Dịch vụ không tồn tại');
        }
        $service->name = $request->input('name');
        $service->image = $request->input('image');
        $service->description = $request->input('description');
        $slug = Str::slug($request->input('name'), '-');
        $existingSlug = Service::where('slug', $slug)->where('id', '!=', $id)->first();
        if ($existingSlug) {
            $order = Service::where('slug', 'like', $slug . '-%')->count() + 1;
            $service->slug = $slug . '-' . $order;
        } else {
            $service->slug = $slug;
        }
        $service->save();
        if ($service) {
            Session::flash('success', 'Cập nhật dịch vụ thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi cập nhật dịch vụ');
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $id = (int)$request->input('id');
        $result = Service::find($id);
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
