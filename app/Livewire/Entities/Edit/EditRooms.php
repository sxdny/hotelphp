<?php

namespace App\Livewire\Entities\Edit;

use Livewire\Attributes\Reactive;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Rooms;
use Livewire\Attributes\On; 

class EditRooms extends Component
{
    // for image uploads
    use WithFileUploads;

    #[Reactive]
    public $roomId;
    public $name;
    public $description;
    public $capacity;
    public $image;
    public $price;
    public $room;
    
    // Default values
    public $type = 'individual';
    public $state = 'available';

    public function mount()
    {
         $this->updateRoom();
    }

    /*
        When the roomId changes in ShowEditForms.php
        an event will be sent. This function listens
        to this event and updates the form fields.
    */
    #[On('roomChanged')] 
    public function updatedroomId()
    {
        $this->updateRoom();
    }

    public function updateRoom()
    {
        $this->room = Rooms::find($this->roomId);
        $this->name = $this->room->name;
        $this->description = $this->room->description;
        $this->capacity = $this->room->capacity;
        $this->image = $this->room->image;
        $this->price = $this->room->price;

    }

    public function render()
    {
        return view('livewire.entities.edit.edit-rooms');
    }
}
