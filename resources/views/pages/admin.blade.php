<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin přihlášení</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Flex container for the image and form -->
  <div class="min-h-screen flex items-center justify-center bg-gray-100">


    <!-- Login Form -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md mx-8">
      <h2 class="text-2xl font-bold mb-6 text-center">Admin přihlášení</h2>

      <!-- Formulář pro přihlášení -->
      <form action="/admin" method="POST">
      @csrf

        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Uživatelské jméno</label>
          <input name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Zadejte uživatelské jméno" required>
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Heslo</label>
          <input name = "password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Zadejte heslo" required>
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Přihlásit se
          </button>
        </div>
      </form>
      @if ($errors->has('loginError'))
    <div class="text-red-500 mt-4">
        {{ $errors->first('loginError') }}
    </div>
@endif
    </div>


    
  </div>

</body>
</html>
