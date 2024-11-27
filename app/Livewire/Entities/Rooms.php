<?php

namespace App\Livewire\Entities;

use Livewire\Attributes\Reactive;
use Livewire\Component;
use App\Models\Rooms as RoomModel;

class Rooms extends Component
{
    public $tableProperties;
    public $rooms;
    #[Reactive]
    public $indexRoom = 0;
    public $visible;

    public $selectedRooms = [];

    public function nextRoom()
    {
        dd("Alert");
    }
    
    public function mount()
    {
        $this->rooms = RoomModel::all();
        // obtener los keys de una colección
        $this->tableProperties = array_keys($this->rooms[0]->getAttributes());
    }

    public function editRooms()
    {
        // editar las habitaciones
    }
    
    public function render()
    {
        // better aproach
        // return view('livewire.entities.rooms', [
        //     'rooms' => RoomModel::all(),
        // ]);

        return view('livewire.entities.rooms');
    }
}
