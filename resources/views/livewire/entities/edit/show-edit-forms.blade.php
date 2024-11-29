<div>
    @livewire('entities.edit.edit-rooms', ['roomId' => $roomIdToEdit])

    <p class="text-xl text-white font-semibold">{{ $currentRoom }}</p>
    <button wire:click="nextRoom">Siguiente</button>
</div>
