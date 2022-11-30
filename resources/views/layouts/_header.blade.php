<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
        <a class="navbar-brand" href="{{ route('home') }}">weitalk 微聊</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav justify-content-end">
                @if (Auth::check())
                    <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">用户列表</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-dark " aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">個人中心</a>
                            <a class="dropdown-item" href="{{ route('users.edit', Auth::user()) }}">編輯資料</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" id="logout" href="#">
                                <form action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                </form>
                            </a>
                        </div>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('signup') }}">註冊</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登入</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">幫助</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
