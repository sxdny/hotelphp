@extends('layouts.default')

@section('content')
<div class="flex-1 grid grid-cols-4 p-5 gap-5">
  <div class="flex flex-col w-full gap-2 col-span-3 text-left">
    <header class="flex flex-col gap-1">
      <h1 class="text-4xl text-white font-semibold">Hello, {{ auth()->user()->name }}</h1>
      <p class="text-neutral-300">Welcome to your dashboard. Here you can customize your profile</p>
    </header>
  
    <div class="flex flex-col gap-3 border border-neutral-700 bg-neutral-800 p-4">
      <div class="flex border py-3 rounded border-neutral-700 px-3 flex-col gap-2">
        <h2 class="text-white text-xl">Name:</h2>
        <p class="text-neutral-300">{{auth()->user()->name}}</p>
      </div>
      <div class="flex border py-3 rounded border-neutral-700 px-3 flex-col gap-2">
        <h2 class="text-white text-xl">Email:</h2>
        <p class="text-neutral-300">{{auth()->user()->email}}</p>
      </div>
      <div class="flex border py-3 rounded border-neutral-700 px-3 flex-col gap-2">
        <h2 class="text-white text-xl">User id:</h2>
        <p class="text-neutral-300">{{auth()->user()->id}}</p>
      </div>
    </div>
  </div>

  <div class="bg-neutral-800 border border-neutral-600 rounded text-left px-5">
    <div class="flex flex-col gap-1 py-4">
      <h2 class="text-white font-semibold text-xl w-full">Sidebar</h2>
      <p class="text-neutral-300">Manage all the entities in one place.</p>
    </div>
    <ul class="flex flex-col gap-1">
      <li>
        <a class="text-blue-200" href={{route('view-rooms')}}>Manage rooms</a>
      </li>
      <li>
        <a class="text-blue-200" href="/dashboard/clients">Manage clients</a>
      </li>
      <li>
        <a class="text-blue-200" href="/dashboard/reservations">Manage reservetaions</a>
      </li>
    </ul>
  </div>
  
</div>  
@endsection