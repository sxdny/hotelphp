<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\Client;

class Login extends Component
{
    public $username = '';
    public $password = '';

    public function login()
    {
        $this->validate([
            'username' => 'required|string|max:20',
            'password' => 'required|string|max:20'
        ]);
        
        $client = Client::where('username', $this->username)->where('password', $this->password)->first();

        if ($client) {
            session()->flash('message', $client->name);
        } else {
            session()->flash('message', 'El usuario no existe');
        }


    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
