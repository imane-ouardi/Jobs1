<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Job Portal')</title>

    {{-- CSS --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">

    {{-- Livewire Styles --}}
    @livewireStyles
</head>
<body class="bg-white text-body dark:bg-dark dark:text-white">

    {{-- محتوى الصفحة --}}
    @yield('content')

    {{-- JavaScript --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- Livewire Scripts --}}
    @livewireScripts
</body>
</html>
