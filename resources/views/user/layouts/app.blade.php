<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('user.includes.head')
<body>
    <main>
        @yield('content')
    </main>

    @include('user.includes.scripts')
    @stack('scripts')
</body>
</html>
