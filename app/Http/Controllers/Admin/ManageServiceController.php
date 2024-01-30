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
        $service->status = 1;
        $service->save();

        if ($service) {
            Session::flash('success', 'Thêm dịch vụ thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi thêm dịch vụ');
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
