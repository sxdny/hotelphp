<?php

namespace App\Livewire\Entities;

use Livewire\Component;
use App\Models\Rooms as RoomModel;

class Rooms extends Component
{
    public $tableProperties;
    public $rooms;
    public $visible;
    public $currentRoom = 0;
    public $selectedRooms = [];

    public $showRooms = false;

    public function mount()
    {
        $this->rooms = RoomModel::all();
        // obtener los keys de una colección
        $this->tableProperties = array_keys($this->rooms[0]->getAttributes());
    }

    public function resetCurrentRoom()
    {
        $this->currentRoom = 0;
    }

    public function toggleViewRooms()
    {
        $this->showRooms = !$this->showRooms;
    }

    public function hideRoomView()
    {
        $this->showRooms = false;
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
