@extends('layouts.default')

@section('content')
<div class="flex-1 flex flex-col p-5 gap-5">
    
    <header class="text-left">
        <h1 class="text-xl font-semibold text-white">Rooms</h1>
        <p class="text-neutral-300 text-lg">Here you can manage all the rooms.</p>
    </header>
    
    @livewire('entities.rooms')
</div>
  
@endsection