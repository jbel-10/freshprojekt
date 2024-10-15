@extends('layouts.page')

@section('title', 'Japonsko - Vítejte na mém blogu o zemi vycházejícího slunce')

@section('content')
    <!-- Hlavni sekce -->
    <main class="w-full h-[65vh] bg-cover bg-center bg-no-repeat flex items-center justify-center" style="background-image: url('/obrazky/fujiautumn.jpg');">
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
                    <!-- Nahledova fotka -->
                    @if ($post->main_photo)
                        <a href="{{ url("/{$post->category}/{$post->id}") }}" class="block">
                            <img class="object-cover w-full h-48 overflow-hidden rounded-lg shadow-sm" src="{{ asset('storage/' . $post->main_photo) }}" alt="{{ $post->title }}">
                        </a>
                    @endif

                    <!-- Kategorie -->
                    <div class="bg-gray-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                        <span>{{ ucfirst($post->category) }}</span>
                    </div>

                    <!-- Titulek-->
                    <h3 class="text-lg font-bold sm:text-xl md:text-2xl">
                        <a href="{{ url("/{$post->category}/{$post->id}") }}">{{ $post->title }}</a>
                    </h3>

                    <!-- Cast textu -->
                    <p class="text-sm text-gray-500">{{ Str::limit($post->content, 150) }}</p>

                    <!-- Autor a datum -->
                    <p class="pt-2 text-xs font-medium">
                        <a href="#" class="mr-1 underline">{{ $post->admin->username }}</a>
                        <span class="mx-1">· {{ $post->created_at->locale('cs')->translatedFormat('j. F Y') }}</span>
                    </p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Formular na newsletter -->
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4 text-center">Přihlaste se k newlsetteru.</h2>

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
@endsection
