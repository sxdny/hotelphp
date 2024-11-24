{{-- Livewire Componente - Rooms --}}
<div>
    <table class="text-left">
        <thead>
            @foreach ($tableProperties as $property )
                <td class="text-white font-semibold bg-neutral-800 px-3 py-2 border border-neutral-700"> {{$property}} </td>
            @endforeach
        </thaed>
        <tbody class="bg-neutral-600 text-neutral-300 border border-neutral-700 text-sm">
            @foreach ($rooms as $room )
            <tr class="py-3">
                @foreach ($tableProperties as $property)
                    <td class="p-4 border border-neutral-700"> {{$room->$property}} </td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
        
    </table>
</div>
