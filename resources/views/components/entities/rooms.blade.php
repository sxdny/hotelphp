@extends('layouts.default')

@section('content')
<div x-data="{ showModal: false}" class="flex-1 flex flex-col p-5 gap-5">
    
    <header class="text-left flex justify-between items-center">
        <div>
            <h1 class="text-xl font-semibold text-white">Rooms</h1>
            <p class="text-neutral-300 text-lg">Here you can manage all the rooms.</p>
        </div>

        <div class="flex gap-2">
            <button class="bg-red-800 text-red-100 px-2 py-1 border border-red-100 rounded">Delete a Room</button>
            <button @click="showModal = ! showModal" class="bg-green-800 text-green-100 px-2 py-1 border border-green-100 rounded">Add a New Room</button>

            <div class="absolute m-auto left-0 right-0 w-[50rem] rounded border border-neutral-600 z-50 bg-neutral-800 p-5" x-show="showModal" @click.outside="showModal = false">
                <header class="flex jusify-between items-start">
                    <div>
                        <h1 class="text-white text-2xl font-semibold">Add a new room</h1>
                        <p class="text-neutral-300">Fill the fields to add a new room to the database.</p>
                    </div>
                    <button @click="showModal = false" class="text-sm ml-auto text-white"> Close </button>
                </header>
                @livewire('entities.insert.insert-new-rooms')
            </div>

            <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-xs transition-opacity">
            </div>
        </div>
    </header>
    
    @livewire('entities.rooms')
</div>
  
@endsection