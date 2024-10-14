<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucfirst($category) }} Posts</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Header s navigací-->
<header class="w-full bg-red-500 text-white">
  <nav class="w-full flex justify-center py-6">
    <ul class="flex space-x-10 text-white text-xl font-medium">
      <li><a href="/">Domů</a></li>
      <li><a href="poprvedojaponska">Poprvé do Japonska</a></li>

      <!-- Drop-down Menu for Články -->
      <li class="relative group">
        <span class="cursor-pointer">Články</span>
        <ul class="hidden group-hover:block bg-red-500 text-white p-4 rounded shadow-lg space-y-2 min-w-[150px] absolute">
          <li><a href="/jidlo" class="hover:text-red-300">Jídlo</a></li>
          <li><a href="/vylety" class="hover:text-red-300">Výlety</a></li>
          <li><a href="/popkultura" class="hover:text-red-300">Popkultura</a></li>
          <li><a href="/kultura" class="hover:text-red-300">Kultura</a></li>
          <li><a href="/cestovatelsketipy" class="hover:text-red-300">Cestovatelské tipy</a></li>
          <li><a href="/ostatni" class="hover:text-red-300">Ostatní</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold mb-6">Prispevky v kategorii: {{ ucfirst($category) }}</h1>
        <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
            @foreach ($posts as $post)
                <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                    <!-- Nahledova fotka -->
                    @if ($post->main_photo)
                        <a href="{{ url("/$category/{$post->id}") }}" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="{{ asset('storage/' . $post->main_photo) }}" alt="{{ $post->title }}">
                        </a>
                    @endif

                    <!-- Kategorie postu -->
                    <div class="bg-gray-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                        <span>{{ ucfirst($post->category) }}</span>
                    </div>

                    <!-- Titulek -->
                    <h2 class="text-lg font-bold sm:text-xl md:text-2xl">
                        <a href="{{ url("/$category/{$post->id}") }}">{{ $post->title }}</a>
                    </h2>

                    <!-- Cast textu -->
                    <p class="text-sm text-gray-500">{{ Str::limit($post->content, 150) }}</p>

                    <!-- Jmeno autora a datum pridani prispevku -->
                    <p class="pt-2 text-xs font-medium">
                        <a href="#" class="mr-1 underline">{{ $post->admin->username }}</a>
                        <span class="mx-1">· {{ $post->created_at->format('F j, Y') }}</span>
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
</body>
</html>
