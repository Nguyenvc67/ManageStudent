<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class login extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('login.login');
    }

    protected function attemptLogin(Request $request)
    {
        // Thêm các điều kiện kiểm tra tùy chỉnh trước khi đăng nhập
        // Ví dụ: Kiểm tra xem người dùng đã được kích hoạt hay chưa

        // Gọi phương thức attemptLogin mặc định
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function authenticated(Request $request, $user)
    {
        // Xử lý sau khi người dùng đã đăng nhập thành công
        return redirect()->intended($this->redirectPath());
    }
}
