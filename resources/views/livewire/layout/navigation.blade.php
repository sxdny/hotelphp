<?php
// TODO: hacer lógica para login y para el logout
// $userId = request()->cookie('userId');
?>

<nav x-data="{ open: false }"
    class="bg-neutral-900 border-b border-neutral-700 px-6 py-4 flex justify-between items-center">
    <a class="text-white text-lg font-semibold" href={{ route('home') }}>
        Hotel PHP</a>

    <ul class="flex gap-4 text-neutral-300 text-sm items-center">
        <li>
            <a href="/contact">Contact with us</a>
        </li>
        @auth
            <button type="button" class="bg-neutral-700 py-3 px-4 rounded-full text-neutral-400 border border-neutral-400"
                x-on:click="open = !open">
                {{ substr(auth()->user()->name, 0, 1) }}
            </button>

            <div class="absolute top-[4.25rem] right-[3rem] rounded border border-neutral-600 bg-neutral-800" x-show="open" @click.outside="open = false">
                <h2 class="font-semibold text-lg border-b border-neutral-600 w-full py-1 px-6 text-white">
                   {{ auth()->user()->name }}
                </h2>
                <ul class="flex flex-col">
                    <li class="border-t border-b border-neutral-600 w-full py-1 px-6 text-neutral-400">
                        <a href="/dashboard">Dashboard</a>
                    </li>
                    <li class="border-t border-b border-neutral-600 w-full py-1 px-6 text-red-400">
                        @livewire('auth.logout')
                    </li>
                </ul>
            </div>
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
