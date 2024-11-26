<?php

namespace App\Livewire\Entities\Edit;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Rooms;

class EditRooms extends Component
{
    // Campos del formulario
    use WithFileUploads;
 
    public $name;
    public $description;
    public $capacity;
    public $image;
    public $price;
    
    // default values
    public $type = 'individual';
    public $state = 'available';

    public function editRoom()
    {

    }

    public function render()
    {
        return view('livewire.entities.edit.edit-rooms');
    }
}
