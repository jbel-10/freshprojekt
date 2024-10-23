@extends('layouts.page')

@section('title', 'Příspěvky v kategorii: ' . ucfirst($category))

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold mb-6">Příspěvky v kategorii: {{ ucfirst($category) }}</h1>

        <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
            @foreach ($posts as $post)
                <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                    <!-- Nahledova fotka -->
                        <a href="{{ url("/$category/{$post->id}") }}" class="block">
                            <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" 
                            src="{{ asset('storage/' . $post->main_photo) }}" alt="{{ $post->title }}">
                        </a>
                

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
                        <span class="mx-1">· {{ $post->created_at->locale('cs')->translatedFormat('j. F Y') }}</span>
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Stranky -->
        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
@endsection

