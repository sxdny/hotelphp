<?php

namespace App\Livewire\Entities\Edit;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class ShowEditForms extends Component
{

    #[Reactive]
    public $rooms;
    public $currentRoom = 0;

    public function nextRoom()
    {
        if($this->currentRoom != count($this->rooms) - 1)
        {
            $this->currentRoom++;
            
        }
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
