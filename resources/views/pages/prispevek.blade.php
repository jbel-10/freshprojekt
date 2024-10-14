<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vytvoreni prispevku</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <h1 class="text-4xl font-bold mb-6">Vytvorit novy prispevek</h1>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
            @csrf

            <!-- Titulek -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="title">Titulek</label>
                <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Enter Post Title" required>
            </div>

            <!-- Kategorie -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="category">Kategorie</label>
                <select name="category" id="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="jidlo">jidlo</option>
                    <option value="vylety">vylety</option>
                    <option value="popkultura">popkultura</option>
                    <option value="kultura">kultura</option>
                    <option value="cestovatelsketipy">cestovatelsketipy</option>
                    <option value="ostatni">ostatni</option>
                </select>
            </div>

            <!-- Nahledova fotka -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="main_photo">Nahledova fotka</label>
                <input type="file" name="main_photo" id="main_photo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Obsah prispevku -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="content">Prispevek</label>
                <textarea name="content" id="content" rows="6" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter post content here..." required></textarea>
            </div>

            <!-- Fotky k clanku -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="images">Dalsi fotky</label>
                <input type="file" name="images[]" id="images" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" multiple>
            </div>

            <!-- Potvrzeni -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Vytvorit prispevek</button>
            </div>
        </form>
    </div>
</body>
</html>