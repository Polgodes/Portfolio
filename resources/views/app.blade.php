<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Godess Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-900">

    @include('components.__header')

    <main class="flex-grow container mx-auto px-6 py-20"> 
        @yield('content')
    </main>

    @include('components.__footer')

</body>
</html>