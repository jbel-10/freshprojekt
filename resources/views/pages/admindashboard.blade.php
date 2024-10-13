<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <h1 class="text-4xl font-bold mb-6">Welcome to the Admin Dashboard</h1>
        <p class="text-lg">This is a secure section of the site only accessible to logged-in admins.</p>

        <!-- Logout Button -->
        <form action="{{ route('admin.logout') }}" method="POST" class="mt-6">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Odhlásit se</button>
        </form>
    </div>
</body>
</html>
