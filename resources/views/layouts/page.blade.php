<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="font-serif min-h-screen flex flex-col">
    
    <!-- Header -->
    @include('layouts.partials.header')

    <!-- Page-specific content -->
    <div class="flex-grow">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layouts.partials.footer')

</body>
</html>