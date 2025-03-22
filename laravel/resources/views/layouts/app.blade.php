<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Posty</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-300">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex justify-start items-center">
                <li class="px-3">
                    <a href="{{ route('home') }}"
                        ><i class="fa fa-home"></i> Home</a
                    >
                </li>
                <li class="px-3">
                    <a href=""><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="px-3">
                    <a href=""><i class="fa fa-edit"></i> Post</a>
                </li>
            </ul>

            <ul class="flex justify-start items-center">
                <li class="px-3">
                    <a href=""><i class="fa fa-user"></i> Jean</a>
                </li>
                <li class="px-3">
                    <a href=""><i class="fa fa-lock"></i> Login</a>
                </li>
                <li class="px-3">
                    <a href="{{ route('register') }}"
                        ><i class="fa fa-user-plus"></i> Register</a
                    >
                </li>
                <li class="px-3">
                    <a href=""><i class="fa fa-door-open"></i> Logout</a>
                </li>
            </ul>
        </nav>

        @yield('content')
    </body>
</html>
