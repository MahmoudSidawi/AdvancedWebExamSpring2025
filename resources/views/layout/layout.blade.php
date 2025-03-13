<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Manage')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-white text-xl font-bold" href="{{ route('recipes.index') }}">My Laravel App</a>
        <button class="text-white lg:hidden block" type="button" id="navbar-toggle">
            <span class="material-icons">menu</span>
        </button>
        <div class="hidden lg:flex lg:items-center lg:justify-end" id="navbarNav">
            <ul class="flex space-x-4">
                <li>
                    <a class="text-white hover:text-blue-300" href="{{ route('recipes.index') }}">Home</a>
                </li>
                <li>
                    <a class="text-white hover:text-blue-300" href="{{ route('recipes.create') }}">Students</a>
                </li>
                <li>
                    <a class="text-white hover:text-blue-300" href="{{ route('recipes.create') }}">Courses</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div class="container mx-auto mt-4">
        
        @yield('content')
    </div>

</body>
</html>
