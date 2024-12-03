<?php

namespace App\Livewire\Entities\Edit;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class ShowEditForms extends Component
{
    #[Reactive]
    public $rooms;
    public $currentRoom = 0;
    public $roomIdToEdit = 0;

    public function nextRoom()
    {
        if($this->currentRoom != count($this->rooms) - 1)
        {
            $this->currentRoom++;
            $this->dispatch("roomChanged"); // sends the 'signal' to the whole component
            $this->roomIdToEdit = $this->rooms[$this->currentRoom];

        }
    }

    public function previousRoom()
    {
        if($this->currentRoom != 0)
        {
            $this->currentRoom--;
            $this->dispatch("roomChanged"); // sends the 'signal' to the whole component
            $this->roomIdToEdit = $this->rooms[$this->currentRoom];

        } 
    }

    public function mount()
    {
        $this->roomIdToEdit = $this->rooms[$this->currentRoom];
    }

    public function resetCoounter()
    {
        $this->currentRoom = 0;
    }

    public function render()
    {
        return view('livewire.entities.edit.show-edit-forms');
    }
}
