<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact(){
        return view('user.pages.contact', [
            'title' => 'Liên hệ'
        ]);
    }
    public function sendMessage(Request $request){
        dd($request->all());
    }
}
