<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- This will allow each page to set its own title -->
    @vite('resources/css/app.css')
</head>
<body class="font-serif">

    <!-- Header -->
    @include('layouts.header')

    <!-- Page-specific content -->
    <div class="container mx-auto py-8">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>
