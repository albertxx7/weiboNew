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
            if (Auth::user()->activated) {
                session()->flash('info', '歡迎回來！');
                $fallback = route('users.show', Auth::user());
                return redirect()->intended($fallback);
            } else {
                Auth::logout();
                session()->flash('warning', '你的帳號未激活，請檢查郵箱中的註冊郵件進行激活。');
                return redirect('/');
            }
        } else {
            session()->flash('danger', '很抱歉，您的郵箱和密碼不匹配');
            return redirect()->back()->withInput();
        }
    }




    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功登出！');
        return redirect('login');
    }
}
