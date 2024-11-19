<?php

namespace App\Livewire;

use Livewire\Component;

class CreateUser extends Component
{

    // Aqui tengo que hacer un SELECT de la base de datos
    // para después pasarlo al componente y así hacerlo
    // todo dentro

    public function render()
    {
        return view('livewire.create-user');
    }
}
