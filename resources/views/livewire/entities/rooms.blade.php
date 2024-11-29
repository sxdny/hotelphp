{{-- Livewire Componente - Rooms --}}
<div class="flex gap-2" x-data="{ showEditRoomsModal: false }">
    <div>
        {{-- Tabla mostrar habitaciones --}}
        <table class="text-left">
            <thead>
                <td class="text-white font-semibold bg-neutral-800 px-3 py-2 border border-neutral-700"></td>
                @foreach ($tableProperties as $property)
                    <td class="text-white font-semibold bg-neutral-800 px-3 py-2 border border-neutral-700">
                        {{ $property }} </td>
                @endforeach
            </thead>
            <tbody class="text-neutral-300 text-sm">
                <fieldset>
                    @foreach ($rooms as $room)
                        <tr x-data="{ selected: false }">
                            <td
                                :class="{ 'bg-neutral-500 text-white': selected, 'px-3 bg-neutral-600 border border-neutral-400': true }">
                                <input wire:click="resetCurrentRoom" @click="selected = ! selected" type="checkbox"
                                    wire:model.live="selectedRooms" value={{ $room->id }}>
                            </td>
                            @foreach ($tableProperties as $property)
                                <td
                                    :class="{ 'bg-neutral-500 text-white': selected, 'px-3 bg-neutral-600 border border-neutral-400': true }">
                                    {{ $room->$property }} </td>
                            @endforeach
                        </tr>
                    @endforeach
                </fieldset>
            </tbody>
        </table>

        {{-- Acciones para las habitaciones - Eliminar y Editar --}}

        <div class="bg-neutral-600 border border-neutral-400 p-3 flex justify-between items-center">
            <h2 class="font-semibold text-white">Acciones por habitación</h2>
            <div class="flex gap-2">
                <button @if (count($selectedRooms) == 0) disabled @endif
                    class="disabled:bg-neutral-700 disabled:text-neutral-400 disabled:border-neutral-400 bg-red-800 border border-red-300 text-red-300 px-3 py-2 rounded">Eliminar</button>

                <button wire:click="toggleViewRooms" @if (count($selectedRooms) == 0) disabled @endif
                    class="disabled:bg-neutral-700 disabled:text-neutral-400 disabled:border-neutral-400 bg-neutral-800 border border-neutral-300 text-neutral-300 px-3 py-2 rounded">Editar</button>

            </div>

            {{-- Edit Rooms Modal --}}
            @if ($showRooms)
                <div
                    wire:clickaway="hideRoomView" class="absolute top-[2.5%] m-auto left-0 right-0 w-[50rem] rounded border border-neutral-600 z-50 bg-neutral-800 p-5">
                    <header class="flex jusify-between items-start">
                        <div>
                            <h1 class="text-white text-start text-2xl font-semibold">Edit room x</h1>
                            <p class="text-neutral-300">Update the room data...</p>
                        </div>
                        <button wire:click="hideRoomView" class="text-sm ml-auto text-white"> Close </button>
                    </header>

                    {{-- Componente de Livewire que muestra las forms --}}
                    @livewire('entities.edit.show-edit-forms', ['rooms' => $selectedRooms, 'currentRoom' => $currentRoom])

                </div>

                {{-- Blur Background --}}
                <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-xs transition-opacity">
                </div>
            @endif         
        </div>
    </div>
</div>
