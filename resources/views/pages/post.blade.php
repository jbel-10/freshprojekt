<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @vite('resources/css/app.css')
</head>
<body class="font-serif">
    
<!-- Header s navigací-->
<header class="w-full bg-red-500 text-white">
  <nav class="w-full flex justify-center py-6">
    <ul class="flex space-x-10 text-white text-xl font-medium">
      <li><a href="/">Domů</a></li>
      <li><a href="poprvedojaponska">Poprvé do Japonska</a></li>

      <!-- Drop-down Menu pro Články -->
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
   
<!-- Hlavní sekce s background obrázkem -->
<main class="w-full h-[65vh] bg-cover bg-center bg-no-repeat flex items-center justify-center" 
   style="background-image: url('{{ asset('storage/' . $post->main_photo) }}');">
  
  <!-- Text-->
  <div class="text-center bg-black bg-opacity-50 px-8 py-4 rounded-lg">
    <!-- Titulek -->
    <h1 class="text-5xl text-white mb-4">{{ $post->title }}</h1>
    
    <!-- Autor a datum -->
    <p class="text-xl text-gray-300">
      By {{ $post->admin->username }} ·{{ $post->created_at->locale('cs')->translatedFormat('j. F Y') }}
    </p>
  </div>
</main>

<!-- Post Content -->
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="prose max-w-full text-gray-800 leading-relaxed">
        {!! nl2br(e($post->content)) !!}
    </div>

    <!-- Dalsi fotky -->
    @if ($post->images)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
            @foreach (json_decode($post->images) as $image)
                <div class="w-full max-w-xs mx-auto h-48 overflow-hidden rounded-lg">
                    <img class="object-cover w-full h-full rounded-lg shadow-md" 
                         src="{{ asset('storage/' . $image) }}" 
                         alt="Additional image for {{ $post->title }}">
                </div>
            @endforeach
        </div>
    @endif
</div>
</body>
</html>
