<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasky</title>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-blue-300">
    @if (!Auth::guest())
    <nav class="p-6 bg-transparent flex justify-between mb-6 text-gray-600 text-lg">
        <ul class="flex items-center">
            <li>
                <a href="{{ route('tasks') }}" class="p-3  hover:bg-red-700 rounded-lg">All tasks</a>
            </li>
            <li>
                <a href="" class="p-3">My tasks</a>
            </li>
            @if (auth()->user()->admin)
            <li>
                <a href="{{ route('register') }}" class="p-3">Add new user</a>
            </li>
            @endif
            
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                <a href="" class="p-3">{{ auth()->user()->name }}</a>
                </li> 
                <li>
                    <form action="{{ route('logout') }}" method="post" class="inline p-3">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li>
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>            
            @endguest
        </ul>
    </nav>
    @endif
    

    @yield('content')
</body>
</html>