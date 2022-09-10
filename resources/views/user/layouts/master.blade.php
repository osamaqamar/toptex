<!DOCTYPE html>
<html lang="en">
@include('user.includes.head')
<body>
    <main class="content">
        @include('user.includes.header')
        @yield('content')
        @include('user.includes.footer')
    </main>

    @include('user.includes.scripts')
    @stack('scripts')
</body>
</html>
