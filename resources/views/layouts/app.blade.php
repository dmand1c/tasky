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
    <nav class="p-6 bg-transparent flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3  hover:bg-red-700 rounded-lg">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="" class="p-3">Tasks</a>
            </li>
        </ul>

        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Damir Mandić</a>
            </li>
            <li>
                <a href="" class="p-3">Login</a>
            </li>
            <li>
                <a href="" class="p-3">Register</a>
            </li>
            <li>
                <a href="" class="p-3">Logout</a>
            </li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>