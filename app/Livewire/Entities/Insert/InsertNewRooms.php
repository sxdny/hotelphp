<?php

namespace App\Livewire\Entities\Insert;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Rooms;

class InsertNewRooms extends Component
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

    public function insertRooms()
    {
        $validateFields = $this->validate([
            'name' => 'required|string|max:20',
            'description' => 'required|string|max:255',
            'type' => 'required|string|max:20',
            'capacity' => 'required|integer|max:5',
            'image' => 'nullable|image|max:2048',
            'price' => 'required|integer|max:2000'
        ]);

        $lastRoom = Rooms::latest()->first();
        // store the image
        $path = $this->image->storeAs('rooms', 'room'.$lastRoom->id+1 . '.' .$this->image->getClientOriginalExtension(), 'photos');

        Rooms::create([
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'capacity' => $this->capacity,
            'image_url' => $path,
            'state' => $this->state,
            'price' => $this->price,
        ]);

        return redirect(request()->header('Referer'));
    }
     // TODO: resetear los inputs

    public function render()
    {
        return view('livewire.entities.insert.insert-new-rooms');
    }
}
