<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('user.pages.home', [
            'title' => 'Trang chủ',
        ]);
    }
}
