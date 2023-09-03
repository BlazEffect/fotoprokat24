<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Fotoprokat24</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

        @yield('styles')
    </head>

    <body>
        @yield('header')

        @yield('main')

        @yield('footer')

        @include('layout/modals/login-form')
        @include('layout/modals/restore')
        @include('layout/modals/feedback')
        @include('layout/modals/subscribe')

        @yield('scripts')
    </body>
</html>
