@extends('layouts.default')

@section('content')
<div class="flex-1 flex flex-col gap-4 p-6 text-left">
  <header class="flex flex-col gap-1">
    <h1 class="text-4xl text-white font-semibold">Hello, {{ auth()->user()->name }}</h1>
    <p class="text-neutral-300">Welcome to your dashboard. Here you can customize your profile</p>
  </header>

  <div class="flex flex-col gap-3 border border-neutral-700 bg-neutral-800 p-4">
    <div class="flex border py-3 rounded border-neutral-700 px-3 flex-col gap-2">
      <h2 class="text-white text-xl">Name:</h2>
      <p class="text-neutral-300">{{auth()->user()->name}}</p>
    </div>
    <div class="fflex border py-3 rounded border-neutral-700 px-3 flex-col gap-2">
      <h2 class="text-white text-xl">Email:</h2>
      <p class="text-neutral-300">{{auth()->user()->email}}</p>
    </div>
    <div class="flex border py-3 rounded border-neutral-700 px-3 flex-col gap-2">
      <h2 class="text-white text-xl">User id:</h2>
      <p class="text-neutral-300">{{auth()->user()->id}}</p>
    </div>

    {{-- Insert @livewire('auth.logout') --}}
    @livewire('auth.logout')
  </div>
</div>  
@endsection