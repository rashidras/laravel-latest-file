<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    <script src="{{ mix('js/app.js')}}" defer></script>
    <title>Laravel App - @yield('title')</title>
</head>
<body>
    <div>
        <h5>Laravel App</h5>
        <nav>
            <a href="{{ route('home.index') }}">Home</a>
            <a href="{{ route('home.contact') }}">Contact</a>
            <a href="{{ route('posts.index') }}">Blog Posts</a>
            <a href="{{ route('posts.create') }}">Add Blog Post</a>
            
        </nav>
    </div>
    <div class="container">
        @if(session('status'))
            <div style="background: red;color:white">
                {{ session('status')}}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>