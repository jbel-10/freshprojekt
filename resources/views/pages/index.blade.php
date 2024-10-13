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

      <!-- Drop-down Menu for Články -->
      <li class="relative group">
        <span class="cursor-pointer">Články</span>
        <ul class="hidden group-hover:block bg-red-500 text-white p-4 rounded shadow-lg space-y-2 min-w-[150px] absolute">
          <li><a href="jidlo" class="hover:text-red-300">Jídlo</a></li>
          <li><a href="vylety" class="hover:text-red-300">Výlety</a></li>
          <li><a href="popkultura" class="hover:text-red-300">Popkultura</a></li>
          <li><a href="kultura" class="hover:text-red-300">Kultura</a></li>
          <li><a href="cestovatelsketipy" class="hover:text-red-300">Cestovatelské tipy</a></li>
          <li><a href="ostatni" class="hover:text-red-300">Ostatní</a></li>
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

   <section class="bg-white">
    <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">

        <div class="flex flex-col items-center sm:px-5 md:flex-row">
            <div class="w-full md:w-1/2">
                <a href="#_" class="block">
                    <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96" src="https://cdn.devdojo.com/images/may2021/cupcakes.jpg">
                </a>
            </div>
            <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                <div class="flex flex-col items-start justify-center h-full space-y-3 transform md:pl-10 lg:pl-16 md:space-y-5">
                    <div class="bg-pink-500 flex items-center pl-2 pr-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                        <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span>Featured</span>
                    </div>
                    <h1 class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"><a href="#_">Savory Templates. Sweet Designs.</a></h1>
                    <p class="pt-2 text-sm font-medium">by <a href="#_" class="mr-1 underline">John Doe</a> · <span class="mx-1">April 23rd, 2021</span> · <span class="mx-1 text-gray-600">5 min. read</span></p>
                </div>
            </div>
        </div>

        <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/fruit.jpg">
                </a>
                <div class="bg-purple-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Lifestyle</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl"><a href="#_">Creating a Future Worth Living</a></h2>
                <p class="text-sm text-gray-500">Learn the attributes you need to gain in order to build a future and create a life that you are truly happy with.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mary Jane</a> · <span class="mx-1">April 17, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/workout.jpg">
                </a>
                <div class="bg-pink-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Health</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">The Healther Version of Yourself</h2>
                <p class="text-sm text-gray-500">If you want to excel in life and become a better version of yourself, you'll need to upgrade your life.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Fred Jones</a> · <span class="mx-1">April 10, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/food.jpg">
                </a>
                <div class="bg-red-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Food</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Enjoy the Meals of the Kings</h2>
                <p class="text-sm text-gray-500">Take the time to enjoy the life that you've created. It's totally fine to live like kings and eat like royalty.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mike Roberts</a> · <span class="mx-1">April 6, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56" src="https://cdn.devdojo.com/images/may2021/books.jpg">
                </a>
                <div class="bg-blue-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Motivation</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Writing for Success</h2>
                <p class="text-sm text-gray-500">Writing about your plans for success is extremely helpful for yourself and it will allow you to share your story.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Tom Johnson</a> · <span class="mx-1">May 25, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56" src="https://cdn.devdojo.com/images/may2021/clock.jpg">
                </a>
                <div class="bg-gray-800 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Business</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Simple Time Management</h2>
                <p class="text-sm text-gray-500">Managing your time can make the difference between getting ahead in life or staying exactly where you are.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Scott Reedman</a> · <span class="mx-1">May 18, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56" src="https://cdn.devdojo.com/images/may2021/lemons.jpg">
                </a>
                <div class="bg-yellow-400 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Nutrition</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">The Fruits Life</h2>
                <p class="text-sm text-gray-500">Take a moment and enjoy to enjoy the many fruits of life. Relaxation and a healthy diet can go a long way.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Jake Caldwell</a> · <span class="mx-1">May 15, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

        </div>
    </div>
</section>


<!-- Footer -->
<footer class="bg-gray-600 py-6 w-full left-0">
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
