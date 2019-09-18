<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
      <div class="container">
        <header>
          <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Search</a>
            <a href="#">Contact</a>
          </nav>
        </header>
      </div>


        <div class="container">
            @yield('content')
        </div>
    </body>
</html>