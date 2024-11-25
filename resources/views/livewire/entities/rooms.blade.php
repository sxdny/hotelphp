{{-- Livewire Componente - Rooms --}}
<div>
    <form wire:submit.prevent="editRooms">
    <table class="text-left">
            <thead>
                <td class="text-white font-semibold bg-neutral-800 px-3 py-2 border border-neutral-700"></td>
                @foreach ($tableProperties as $property )
                    <td class="text-white font-semibold bg-neutral-800 px-3 py-2 border border-neutral-700"> {{$property}} </td>
                @endforeach
            </thead>
            <tbody class="text-neutral-300 text-sm">
                <fieldset>
                @foreach ($rooms as $room )
                <tr x-data="{ selected: false }">
                    <td :class="{ 'bg-neutral-500 text-white': selected, 'px-3 bg-neutral-600 border border-neutral-400': true }">
                        <input @click="selected = ! selected" type="checkbox" wire:model.live="selectedRooms" value={{ $room->id }}>
                    </td>
                    @foreach ($tableProperties as $property)
                        <td :class="{ 'bg-neutral-500 text-white': selected, 'px-3 bg-neutral-600 border border-neutral-400': true }"> {{$room->$property}} </td>
                    @endforeach
                </tr>
                @endforeach
                </fieldset>
            </tbody>
    </table>

    <div class="bg-neutral-600 border border-neutral-400 p-3 flex justify-between items-center">
        <h2 class="font-semibold text-white">Acciones por habitación</h2>
        <div class="flex gap-2">
            <button @if(count($selectedRooms) == 0) disabled @endif class="disabled:bg-neutral-700 disabled:text-neutral-400 disabled:border-neutral-400 bg-red-800 border border-red-300 text-red-300 px-3 py-2 rounded">Eliminar</button>
            <button @if(count($selectedRooms) == 0) disabled @endif class="disabled:bg-neutral-700 disabled:text-neutral-400 disabled:border-neutral-400 bg-neutral-800 border border-neutral-300 text-neutral-300 px-3 py-2 rounded">Editar</button>
        </div>
    </div>

    {{-- Modal de cuando vaya a Eliminar y Editar --}}

    @foreach ($selectedRooms as $selected )
    <p class="p-5 text-white">
        {{ $selected }}
    </p>
    @endforeach
    </form>
</div>
