<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white flex flex-col">
    <div class="flex-1">{{ $slot }}</div>
</body>

    @stack('scripts')
</html>
