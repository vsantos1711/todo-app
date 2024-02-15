<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/x-icon">
    <title>TO-DO</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-slate-200 dark:bg-dots-lighter">
    @include('layouts.header')

    <main class="min-h-screen ">
        @yield('create-task-form')
        @yield('update-task-form')
        @yield('user-login')
        @yield('user-register')
        @yield('list-tasks')
    </main>
</body>

</html>