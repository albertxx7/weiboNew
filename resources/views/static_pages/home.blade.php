@extends('layouts.default')

@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="bg-light p-3 p-sm-5 rounded text-center">
            <h1 class="mb-4 fw-bolder"> Guten Tag!</h1>
            <p>
                分享，讓世界更美好
            </p>
            <p>
                <a class="btn btn-lg btn-info" href="{{ route('signup') }}" role="button">馬上註冊</a>
            </p>
        </div>
    @endif
@stop
