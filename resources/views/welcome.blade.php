<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel App</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-white dark:text-white/500">
        <h1 class="text-left">hello world</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, labore laudantium ad aliquid dolor id impedit et recusandae quas iure, mollitia temporibus, consequuntur sequi eaque quo nesciunt accusamus obcaecati dicta?</p>
    </body>
</html>
