<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm(){
        return view('admin.login');
    }

    public function showRegisterForm(){
        return view('admin.register');
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

    public function showCategory(){
        return view('admin.pages.danh-muc');
    }

    public function showNews(){
        return view('admin.pages.tin-tuc');
    }
    
}
