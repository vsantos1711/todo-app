<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD App</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="text-slate-200 bg-gray-900 dark:bg-dots-lighter">
    <header class="bg-slate-800 bg-opacity-90">
        @include('header')
    </header>
    <main class="min-h-screen">
        @yield('content')
    </main>
</body>

</html>
