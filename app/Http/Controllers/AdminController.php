<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm(){
        return view('admin.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->route('showDashboard');
        }
        return redirect()->back()->withErrors(['login' => 'Tên người dùng hoặc mật khẩu không đúng.'])->withInput();
    }

    public function register(Request $request)
    {
        $data = $request->only('name', 'email', 'password');
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        if ($user) {
            return redirect()->route('showLoginForm');
        }
        return redirect()->back()->with('error', 'Đăng ký không thành công');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('showLoginForm');
    }

    public function showRegisterForm(){
        return view('admin.register');
    }

    public function showDashboard(){
        return view('admin.pages.dashboard', [
            'title' => 'Bảng điều khiển'
        ]);
    }

    public function showService(){
        return view('admin.pages.dich-vu', [
            'title' => 'Dịch vụ'
        ]);
    }

    public function showProduct(){
        return view('admin.pages.san-pham', [
            'title' => 'Sản phẩm'
        ]);
    }
    
    public function showAccount(){
        return view('admin.pages.tai-khoan', [
            'title' => 'Tài khoản'
        ]);
    }

    public function showCustomer(){
        return view('admin.pages.khach-hang', [
            'title' => 'Khách hàng'
        ]);
    }

    public function showNews(){
        return view('admin.pages.tin-tuc', [
            'title' => 'Tin tức'
        ]);
    }
    
}
