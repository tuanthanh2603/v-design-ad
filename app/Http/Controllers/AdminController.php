<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLogin(){
        return view('admin.login');
    }
    public function showDashboard(){
        return view('admin.pages.dashboard');
    }
    public function showService(){
        return view('admin.pages.dich-vu');
    }
    public function showProduct(){
        return view('admin.pages.san-pham');
    }
    public function showAccount(){
        return view('admin.pages.tai-khoan');
    }
    public function showCustomer(){
        return view('admin.pages.khach-hang');
    }
}
