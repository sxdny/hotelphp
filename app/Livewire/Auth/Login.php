<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Cookie;
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

        Cookie::queue(
            name: 'userId',
            value: $client->id,
            minutes: 60,
            path: '/'
        );

        if ($client) {
            session()->flash('message', 'Logged in!');
            $this->redirect('/');
        } else {
            session()->flash('message', 'El usuario no existe o la cookie no ha sido creada...');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
