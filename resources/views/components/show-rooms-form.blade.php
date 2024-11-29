<div>

    <form>
        {{-- {{ $currentRoom }}
        {{ print_r(array_slice($rooms, count($rooms) - 1))}} --}}

        {{-- Si es igual al último elemento de la array... --}}
        {{-- @if ($currentRoom == array_slice($rooms, count($rooms) - 1))
            <button>Acabar</button>
        @else
            <button onclick=@php nextRoom() @endphp>Siguiente</button>
        @endif --}}
        <p>Hola {{ print_r($rooms) }}</p>
        <button onclick=@php nextRoom() @endphp>
            Siguiente
        </button>
        {{ $currentRoom }}
    </form>

</div>