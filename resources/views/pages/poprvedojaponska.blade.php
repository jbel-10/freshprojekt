<!doctype html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-serif min-h-screen flex flex-col">

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
<main class="w-full h-[65vh] bg-cover bg-center bg-no-repeat" style="background-image: url('/obrazky/predprvnicestou.jpg');">

</main>

<div class="w-full px-8 py-16">
    <!-- První odstavec -->
    <div class="flex flex-col md:flex-row items-center mb-16">
      <div class="md:w-1/2 md:order-2 md:pl-8"> 
        <img src="obrazky/yen.jpg" class="w-full rounded shadow-lg">
      </div>
      <div class="md:w-1/2 md:pr-8"> 
        <h2 class="text-4xl text-black mb-4">Měna</h2>
        <p class="text-black text-lg">
          Oficiální měnou Japonska je Japonský jen. Vznikl podle vzoru evropských měn v r. 1872. Stejně jako dolar a euro je využíván jako bankovní rezerva. V oběhu jsou mince hodnot 1, 5, 10, 50, 100 a 500 jenů a bankovky v hodnotách 1 000, 2 000, 5 000 a 10 000. Jeny lze standardně nakoupit v českých směnárnách. Je vhodné u sebe mít vždy nějakou hotovost. Přesto, že je Japonsko známo jako technologická velmoc, na některých místech kartou nezaplatíte. 
        </p>
      </div>
    </div>
  
    <!-- Druhý odstavec -->
    <div class="flex flex-col md:flex-row items-center mb-16">
      <div class="md:w-1/2 md:pr-8"> 
        <img src="obrazky/viza.jpg" class="w-full rounded shadow-lg">
      </div>
      <div class="md:w-1/2 md:pl-8"> 
        <h2 class="text-4xl text-black mb-4">Vstup do země</h2>
        <p class="text-black text-lg">
          Občané České republiky mohou cestovat do Japonska s platným cestovním pasem České republiky za účelem turistiky bez víza. Doba platnosti pasu není stanovena, avšak platnost pasu by měla minimálně pokrýt celkovou dobu předpokládaného pobytu v zemi, včetně cesty kalkulované pro návrat. Doporučuje se nicméně, aby platnost pasu byla alespoň o 2 měsíce delší, než je povolená doba pobytu. Řidičský průkaz České republiky není japonskými úřady uznáván. Cestovatel by měl být držitelem mezinárodního řidičského průkazu vydaného podle Ženevské úmluvy z roku 1949 anebo japonského řidičského průkazu. Více informací na <a href="https://mzv.gov.cz/jnp/cz/encyklopedie_statu/asie/japonsko/cestovani/documents.html" class="text-blue-500 underline">stránkách ministerstva zahraničí.</a>
        </p>
      </div>
    </div>

      <!-- Třetí odstavec -->
  <div class="flex flex-col md:flex-row items-center mb-16">
    <div class="md:w-1/2 md:order-2 md:pl-8"> 
      <img src="obrazky/ubytovani.jpg" class="w-full rounded shadow-lg">
    </div>
    <div class="md:w-1/2 md:pr-8"> 
      <h2 class="text-4xl text-black mb-4">Ubytování</h2>
      <p class="text-black text-lg">
        Hotely v Japonsku jsou kromě sezóny (březen-duben a listopad-prosinec) cenově dostupné. Pro sólo cestovatele se mohou hodit kapslové hotely, kde máte místo pokoje kapsli. Pokud budete mít možnost, určitě vyzkoušejte tradiční japonské ubytování ryokan, kde se místo na posteli spí na matracích tatami.
      </p>
    </div>
  </div>

  <!-- Čtvrtý odstavec -->
  <div class="flex flex-col md:flex-row items-center mb-16">
    <div class="md:w-1/2 md:pr-8"> 
      <img src="obrazky/ramen.jpg" class="w-full rounded shadow-lg">
    </div>
    <div class="md:w-1/2 md:pl-8"> 
      <h2 class="text-4xl text-black mb-4">Jídlo</h2>
      <p class="text-black text-lg">
        Jídla je v Japonsku mnoho druhů. Místní strava je velice zdravá a cenově dostupná. V skoro každém obchodě lze koupit plnohodnotné bento (jídlo v krabičce). Zdaleka se nejedná jen o sushi a ramen, které ale získaly celosvětovou popularitu. Dalšími v Japonsku oblíbenými jídly jsou např. takojaki (smažené kuličky s kousky chobotnice), okonomijaki (smažená placka založená na zelí, mouce a vejcích posypaná vločkami bonito ze sušeného tuňáka a dalšími ingrediencemi).
      </p>
    </div>
  </div>
</div>

  
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
  
