@extends('layouts.default')
@section('title', '登录')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card ">
            <div class="card-header">
                <h5>登入</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')

                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="mb-3">
                        <label for="email">信箱：</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label for="password">密碼：</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">登入</button>
                </form>

                <hr>

                <p>沒有帳號?<a href="{{ route('signup') }}">現在註冊!</a></p>
            </div>
        </div>
    </div>
@stop
