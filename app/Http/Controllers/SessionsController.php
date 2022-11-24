<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            session()->flash('success', '歡迎回來！');
            $fallback = route('users.show', Auth::user());
            return redirect()->intended($fallback);
        } else {
            session()->flash('danger', '很抱歉，您的郵箱和密碼不匹配
            ');
            return redirect()->back()->withInput();
        }
    }



    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功登出！');
        return redirect('login');
    }
    //只讓未登錄用戶訪問登入頁面
    public function __construct()

    {
        $this->middleware('auth', [
            'except' => ['show', 'create', 'store']
        ]);

        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }
}
