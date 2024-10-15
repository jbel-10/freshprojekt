<!doctype html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
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

<!-- Hlavni sekce -->
   <main class="w-full h-[65vh] bg-cover bg-center bg-no-repeat flex items-center justify-center" style="background-image: url('/obrazky/fujiautumn.jpg');">
   
     <!-- Text sekce -->
     <div class="text-center">
       <h1 class="text-6xl text-white mb-8">Japonsko</h1>
       <p class="text-3xl text-white">Vítejte na mém blogu o zemi vycházejícího slunce</p>
     </div>
   </main>

<!-- Sekce s posty -->
<div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold mb-6">Nejnovější příspěvky</h2>

    <!-- Grid s posty na 3x3 -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <div class="flex flex-col items-start space-y-3">
                <!-- Post Main Photo -->
                @if ($post->main_photo)
                    <a href="{{ url("/{$post->category}/{$post->id}") }}" class="block">
                        <img class="object-cover w-full h-48 overflow-hidden rounded-lg shadow-sm" src="{{ asset('storage/' . $post->main_photo) }}" alt="{{ $post->title }}">
                    </a>
                @endif

                <!-- Category -->
                <div class="bg-gray-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>{{ ucfirst($post->category) }}</span>
                </div>

                <!-- Post Title -->
                <h3 class="text-lg font-bold sm:text-xl md:text-2xl">
                    <a href="{{ url("/{$post->category}/{$post->id}") }}">{{ $post->title }}</a>
                </h3>

                <!-- Excerpt of the Post Content -->
                <p class="text-sm text-gray-500">{{ Str::limit($post->content, 150) }}</p>

                <!-- Author and Date -->
                <p class="pt-2 text-xs font-medium">
                    <a href="#" class="mr-1 underline">{{ $post->admin->username }}</a>
                    <span class="mx-1">· {{ $post->created_at->format('F j, Y') }}</span>
                </p>
            </div>
        @endforeach
    </div>
</div>

<!-- Formular na newsletter -->
<div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-4 text-center">Přihlaste se k našemu newlsetteru.</h2>

    <!-- Success vs error  -->
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
            {{ session('error') }}
        </div>
    @endif

    <!-- Formular -->
    <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-col space-y-4">
        @csrf
        <input type="email" name="email" placeholder="Enter your email" class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
        
        <!-- Validace -->
        @if ($errors->has('email'))
            <span class="text-red-500">{{ $errors->first('email') }}</span>
        @endif

        <button type="submit" class="bg-red-500 text-white p-3 rounded-lg hover:bg-blue-600">
            Přihlásit se
        </button>
    </form>
</div>

<!-- Footer -->
<footer class="bg-red-500 py-6 w-full left-0">
  <div class="w-full flex justify-between items-center px-4 text-white">
    
    <!-- Copyright Sekce -->
    <div class="text-sm">
      &copy; 2024 Jiri Belohoubek
    </div>

    <!-- Linky na socky -->
    <div class="flex space-x-4">
      <!-- Instagram -->
      <a href="https://www.instagram.com/japanguidecom/" target="_blank" class="text-white hover:text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.3.1 2.1.3 2.7.6a5.4 5.4 0 011.9 1.9c.3.6.5 1.3.6 2.7.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.3-.3 2.1-.6 2.7a5.4 5.4 0 01-1.9 1.9c-.6.3-1.3.5-2.7.6-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.3-.1-2.1-.3-2.7-.6a5.4 5.4 0 01-1.9-1.9c-.3-.6-.5-1.3-.6-2.7-.1-1.3-.1-1.7-.1-4.9s0-3.6.1-4.9c.1-1.3.3-2.1.6-2.7a5.4 5.4 0 011.9-1.9c.6-.3 1.3-.5 2.7-.6 1.3-.1 1.7-.1 4.9-.1m0-1.9c-3.3 0-3.7 0-5.1.1-1.5.1-2.5.3-3.4.6a7.3 7.3 0 00-2.7 2.7c-.3.9-.5 1.9-.6 3.4-.1 1.4-.1 1.8-.1 5.1s0 3.7.1 5.1c.1 1.5.3 2.5.6 3.4a7.3 7.3 0 002.7 2.7c.9.3 1.9.5 3.4.6 1.4.1 1.8.1 5.1.1s3.7 0 5.1-.1c1.5-.1 2.5-.3 3.4-.6a7.3 7.3 0 002.7-2.7c.3-.9.5-1.9.6-3.4.1-1.4.1-1.8.1-5.1s0-3.7-.1-5.1c-.1-1.5-.3-2.5-.6-3.4a7.3 7.3 0 00-2.7-2.7c-.9-.3-1.9-.5-3.4-.6-1.4-.1-1.8-.1-5.1-.1z" />
            <path d="M12 5.8a6.2 6.2 0 100 12.4A6.2 6.2 0 0012 5.8zm0 10.3a4.1 4.1 0 110-8.3 4.1 4.1 0 010 8.3zm5.6-10.7a1.4 1.4 0 11-2.8 0 1.4 1.4 0 012.8 0z" />
          </svg>
        </a>

      <!-- YouTube -->
      <a href="https://www.youtube.com/@japanguide" target="_blank" class="text-white hover:text-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
          <path d="M19.6 3.2H4.4A4.4 4.4 0 000 7.6v8.8a4.4 4.4 0 004.4 4.4h15.2a4.4 4.4 0 004.4-4.4V7.6a4.4 4.4 0 00-4.4-4.4zM9.8 16V8l6.4 4-6.4 4z" />
        </svg>
      </a>
    </div>
  </div>
</footer>

</body>
</html>
