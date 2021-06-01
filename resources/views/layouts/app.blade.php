<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Activity Log Queenstown</title>

    <!-- Styles -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/app.css">

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="form mb-1">
        <div class="note">
            <p>Queenstown Activity Log
{{--                <a class="btn btn-warning mx-1" href="/activities/">Cancel</a>--}}
                @if (Auth::check())
                    <a href="{{ route('logout') }}" class="btn btn-info mx-1" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>

                    <a class="btn btn-info mx-1" href="/">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 float-right mr-3">Login</a>
                @endif
            </p>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    @yield('content')
</div>
</body>
</html>
