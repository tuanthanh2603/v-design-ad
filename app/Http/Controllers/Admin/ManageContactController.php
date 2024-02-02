<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ManageContactController extends Controller
{
    public function index()
    {
        return view('admin.pages.contact.list', [
            'title' => 'Danh sách liên hệ',
            'contacts' => Contact::paginate(10),
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:0,1',
        ]);

        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['success' => false, 'message' => 'Liên hệ không tồn tại']);
        }

        $contact->status = $request->input('status');
        $contact->save();

        return response()->json(['success' => true, 'message' => 'Cập nhật trạng thái liên hệ thành công']);
    }

    public function destroy(Request $request)
    {
        $id = (int)$request->input('id');
        $result = Contact::find($id);
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
