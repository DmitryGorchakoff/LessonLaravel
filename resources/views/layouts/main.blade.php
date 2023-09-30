<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Main</title>

</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('post.index')}}">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Post</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">Contact</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>

</div>
@yield('content')
</body>

</html>
