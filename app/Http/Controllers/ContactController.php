<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    public function showContact(){
        return view('user.pages.contact', [
            'title' => 'Liên hệ'
        ]);
    }
    public function sendMessage(Request $request){
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');
        $contact->status = 1;
        $contact->save();

        if ($contact) {
            Session::flash('success', 'Gửi thông tin liên hệ thành công');
        } else {
            Session::flash('error', 'Có lỗi xảy ra khi gửi liên hệ');
        }

        return redirect()->back();
    }
}
