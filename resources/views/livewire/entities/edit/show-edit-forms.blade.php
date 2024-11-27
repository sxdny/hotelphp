<div>
    <p class="text-white">Values of the array:</p>
    <p class="text-neutral-300">
        {{ print_r($rooms) }}
    </p>

    <p class="text-xl text-white font-semibold">{{ $currentRoom }}</p>
    <button wire:click="nextRoom">Siguiente</button>
</div>
