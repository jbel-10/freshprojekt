@extends('layouts.page')

@section('title', 'Poprvé do Japonska')

@section('content')

<!-- Hlavni sekce -->
<main class="w-full h-[65vh] bg-cover bg-center bg-no-repeat" style="background-image: url('/obrazky/predprvnicestou.jpg');"></main>

<div class="w-full px-8 py-16">
    <!-- První odstavec -->
    <div class="flex flex-col md:flex-row items-center mb-16">
        <div class="md:w-1/2 md:order-2 md:pl-8"> 
            <img src="/obrazky/yen.jpg" class="w-full rounded shadow-lg">
        </div>
        <div class="md:w-1/2 md:pr-8"> 
            <h2 class="text-4xl text-black mb-4">Měna</h2>
            <p class="text-black text-lg">
                Oficiální měnou Japonska je Japonský jen. Vznikl podle vzoru evropských měn v r. 1872...
            </p>
        </div>
    </div>
  
    <!-- Druhý odstavec -->
    <div class="flex flex-col md:flex-row items-center mb-16">
        <div class="md:w-1/2 md:pr-8"> 
            <img src="/obrazky/viza.jpg" class="w-full rounded shadow-lg">
        </div>
        <div class="md:w-1/2 md:pl-8"> 
            <h2 class="text-4xl text-black mb-4">Vstup do země</h2>
            <p class="text-black text-lg">
                Občané České republiky mohou cestovat do Japonska s platným cestovním pasem České republiky...
            </p>
        </div>
    </div>

    <!-- Třetí odstavec -->
    <div class="flex flex-col md:flex-row items-center mb-16">
        <div class="md:w-1/2 md:order-2 md:pl-8"> 
            <img src="/obrazky/ubytovani.jpg" class="w-full rounded shadow-lg">
        </div>
        <div class="md:w-1/2 md:pr-8"> 
            <h2 class="text-4xl text-black mb-4">Ubytování</h2>
            <p class="text-black text-lg">
                Hotely v Japonsku jsou kromě sezóny (březen-duben a listopad-prosinec) cenově dostupné...
            </p>
        </div>
    </div>

    <!-- Čtvrtý odstavec -->
    <div class="flex flex-col md:flex-row items-center mb-16">
        <div class="md:w-1/2 md:pr-8"> 
            <img src="/obrazky/ramen.jpg" class="w-full rounded shadow-lg">
        </div>
        <div class="md:w-1/2 md:pl-8"> 
            <h2 class="text-4xl text-black mb-4">Jídlo</h2>
            <p class="text-black text-lg">
                Jídla je v Japonsku mnoho druhů. Místní strava je velice zdravá a cenově dostupná...
            </p>
        </div>
    </div>
</div>

@endsection
