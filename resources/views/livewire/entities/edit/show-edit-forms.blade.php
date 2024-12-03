<div>
    @livewire('entities.edit.edit-rooms', ['roomId' => $roomIdToEdit])

    @if (count($rooms) == 1)
    <div class="my-3">
        <button class="bg-white px-3 py-2 rounded text-black">Done</button>
    </div>
    @else
    <div class="flex justify-between my-3 items-center">
        <button wire:click="previousRoom" class="bg-white px-3 py-2 rounded text-black">Previous</button>
        <p class="text-xl text-neutral-500">{{$currentRoom + 1}}</p>
        <button wire:click="nextRoom" class="bg-white px-3 py-2 rounded text-black">Next</button>
    </div>
    @endif
</div>
