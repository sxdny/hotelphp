<?php 
    // TODO: hacer lógica para login y para el logout
    // $userId = request()->cookie('userId');
?>

<nav class="bg-neutral-900 border-b border-neutral-700 px-6 py-4 flex justify-between items-center">
    <a class="text-white text-lg font-semibold"
    href={{ route('home') }}>
    Hotel PHP</a>

    <ul class="flex gap-4 text-neutral-300 text-sm items-center">
        <li>
            <a href="/contact">Contact with us</a>
        </li>
        @auth
        <li class="bg-neutral-700 py-3 px-5 rounded-full text-neutral-400 border border-neutral-400">
            <a href="/dashboard">
                {{ auth()->user()->name }}
            </a>
        </li>
        @endauth

        @guest
        <li>
            <a href="/register">Register</a>
        </li>
        <li class="bg-white px-5 py-2 rounded-sm text-black">
            <a href="/login">Login</a>
        </li>
        @endguest
      
    </ul>
</nav>