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

        <!-- Grid s posty na 2x3 -->
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

    <div class="container mx-auto py-12 px-4 sm:px-6 lg:px-8" x-data="gridfotky()" x-init="rotuj()">
    <h2 class="text-3xl font-bold mb-6">Fotky z cest</h2>
    <div class="grid grid-cols-3 gap-4">
        <!-- Grid s 9 fotkami -->
        <template x-for="(image, index) in zobrazeneFotky" :key="index">
            <div class="relative overflow-hidden cursor-pointer" @click="otevriModal(image)">
                <img :src="image" alt="Picture" class="w-full h-48 object-cover rounded-lg">
            </div>
        </template>
    </div>

    <!-- Modal -->
    <div x-show="jeModalOtevreny" x-transition.opacity class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-70" 
        @keydown.window.escape="zavriModal" 
        style="display: none;">
        <div class="relative bg-white rounded-lg shadow-lg overflow-hidden max-w-3xl w-full p-4">
            <!-- Close Button -->
            <button class="absolute top-4 right-4 text-gray-700 hover:text-gray-900" @click="zavriModal">&times;</button>
            <!-- Full-size Image -->
            <img :src="vybranaFotka" alt="Full-size image" class="w-full h-auto object-contain">
        </div>
    </div>
</div>

<script>
    function gridfotky() {
        return {
            // List s fotkami
            obrazky: [
                '{{ asset("obrazky/pic1.jpeg") }}', 
                '{{ asset("obrazky/pic2.jpeg") }}',
                '{{ asset("obrazky/pic3.jpeg") }}',
                '{{ asset("obrazky/pic4.jpeg") }}',
                '{{ asset("obrazky/pic5.jpeg") }}',
                '{{ asset("obrazky/pic6.jpeg") }}',
                '{{ asset("obrazky/pic7.jpeg") }}',
                '{{ asset("obrazky/pic8.jpeg") }}',
                '{{ asset("obrazky/pic9.jpeg") }}',
                '{{ asset("obrazky/pic10.jpeg") }}',
                '{{ asset("obrazky/pic11.jpeg") }}',
                '{{ asset("obrazky/pic12.jpeg") }}',
                '{{ asset("obrazky/pic13.jpeg") }}',
                '{{ asset("obrazky/pic14.jpeg") }}',
                '{{ asset("obrazky/pic15.jpeg") }}',
                '{{ asset("obrazky/pic16.jpeg") }}',
                '{{ asset("obrazky/pic17.jpeg") }}',
                '{{ asset("obrazky/pic18.jpeg") }}',
                '{{ asset("obrazky/pic19.jpeg") }}',
                '{{ asset("obrazky/pic20.jpeg") }}',
                '{{ asset("obrazky/pic21.jpeg") }}',
                '{{ asset("obrazky/pic22.jpeg") }}',
                '{{ asset("obrazky/pic23.jpeg") }}',
                '{{ asset("obrazky/pic24.jpeg") }}',
                '{{ asset("obrazky/pic25.jpeg") }}',
                '{{ asset("obrazky/pic26.jpeg") }}',
                '{{ asset("obrazky/pic27.jpeg") }}',
                '{{ asset("obrazky/pic28.jpeg") }}',
                '{{ asset("obrazky/pic29.jpeg") }}',
                '{{ asset("obrazky/pic30.jpeg") }}',
            ],
            
            zobrazeneFotky: [], // Momentalne vybrane fotky
            jeModalOtevreny: false, // Je modal aktivní?
            vybranaFotka: '', // Otevrena fotka

            // Nahodne vyber fotky
            nahodneVyberFotky() {
                let zamichane = [...this.obrazky].sort(() => 0.5 - Math.random());
                this.zobrazeneFotky = zamichane.slice(0, 9); // Vem prvnich devet
            },

            // Zmen fotky kazdych 30 vterin
            rotuj() {
                this.nahodneVyberFotky(); // Vyber prvnich devet fotek
                setInterval(() => {
                    this.nahodneVyberFotky();
                }, 30000); // 30 vterin
            },

            // Otevreni modalu
            otevriModal(image) {
                this.vybranaFotka = image;
                this.jeModalOtevreny = true;
            },

            // Zavreni modalu
            zavriModal() {
                this.jeModalOtevreny = false;
                this.vybranaFotka = '';
            }
        }
    }
</script>


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
            <input type="email" name="email" placeholder="Vložte svůj email" class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" required>
            
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
