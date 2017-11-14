<!doctype html>

<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>

        <title>@yield('title')</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <link href='{{ url('/brochure/dist/styles/screen.css') }}' rel='stylesheet'>
        <link href='{{ static_url('images/favicon.png') }}' rel='shortcut icon' type='image/x-icon'>

        @stack('styles')
    </head>

    <body>
        <main class='@yield('className')'>

            @yield('content')

        </main>

        <script src='{{ url('/brochure/dist/scripts/index.js') }}'></script>
    </body>
</html>
