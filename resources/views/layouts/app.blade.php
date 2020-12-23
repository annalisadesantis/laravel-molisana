<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield("page-title", "La Molisana")</title>
        {{-- FAVICON --}}
        <link rel="icon" href="https://www.lamolisana.it/wp-content/uploads/2017/07/favicon.png">
        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        {{-- GOOGLE FONT --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        {{-- FONTAWESOME --}}
        @yield("script-fontawesome")
    </head>
    <body>
        {{-- HEADER --}}
        @include("partials.header")

        <main>
            {{-- MAIN --}}
            @yield("content")
        </main>

        {{-- FOOTER --}}
        @include("partials.footer")

        {{-- JAVASCRIPT --}}
        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
