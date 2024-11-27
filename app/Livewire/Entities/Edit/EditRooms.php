<?php

namespace App\Livewire\Entities\Edit;

use Livewire\Attributes\Reactive;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Rooms;

class EditRooms extends Component
{
    // Campos del formulario
    use WithFileUploads;

    // para que se actualize la variable
    #[Reactive]
    public $roomId;

    #[Reactive]
    public $visible;
    public $name;
    public $description;
    public $capacity;
    public $image;
    public $price;
    
    // default values
    public $type = 'individual';
    public $state = 'available';

    public function render()
    {
        $room = Rooms::find($this->roomId);

        $this->name = $room->name;
        $this->description = $room->description;

        return view('livewire.entities.edit.edit-rooms');
    }
}
