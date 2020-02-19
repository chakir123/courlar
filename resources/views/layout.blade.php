<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<link rel="stylesheet" href="{{ mix('/css/theme.css') }}">
    <title>Document</title>

</head>
<body>
    <ul>
        @if (session()->has('ff'))
         <h3 style="color:red">{{ session()->get('ff') }}</h3>
        @endif
        @if (session()->has('mm'))
    <h3 style="color:green">{{ session()->get('mm') }}</h3>
            
        @endif
        @if (session()->has('kk'))
        <h3 style="color:red">{{ session()->get('kk') }}</h3>
                
            @endif
        <a href="{{route('posts.create')}}">new post</a>

    </ul>
    @yield('cc')

   <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>