{{-- <!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo') 微聊</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/help">幫助指南</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">登入</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
 --}}


 <!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo') 微聊</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-md">
        <a class="navbar-brand" href="/">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/help">幫助指南</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">登入</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>

