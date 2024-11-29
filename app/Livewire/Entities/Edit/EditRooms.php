<?php

namespace App\Livewire\Entities\Edit;

use Livewire\Attributes\Reactive;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Rooms;
use Livewire\Attributes\On; 

class EditRooms extends Component
{
    // Campos del formulario
    use WithFileUploads;

    // para que se actualize la variable
    #[Reactive]
    public $roomId;
    
    // evento llamado de ShowEditForms.php
    #[On('roomChanged')] 
    public function updatedroomId()
    {
        $this->room = Rooms::find($this->roomId);
        $this->name = $this->room->name;
    }
    public $name;
    public $description;
    public $capacity;
    public $image;
    public $price;
    public $room;
    
    // default values
    public $type = 'individual';
    public $state = 'available';

    public function mount()
    {
        // crear una función para esto
        $this->room = Rooms::find($this->roomId);

        $this->name = $this->room->name;
    }

    public function render()
    {
        return view('livewire.entities.edit.edit-rooms');
    }
}
