<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Customer Retail </title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;700&display=swap" rel="stylesheet">
</head>

<body>
    <div id="app">
        {{-- <example-component></example-component> --}}
        <App />
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
