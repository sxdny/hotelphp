<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use App\Models\Client;

class NewClient extends Component
{
 
    public $name = '';
    public $surname = '';
    public $email = '';
    public $phone_number = '';
    public $username = '';
    public $password = '';
    
    public function add()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|unique:clients',
            'phone_number' => 'required',
            'username' => 'required|string|max:20',
            'password' => 'required|string|max:20'
        ]);

        Client::create([
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'username' => $this->username,
            'password' => $this->password,
        ]);

        $this->resetInputFields();
        session()->flash('message', 'Client created succesfully!');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->surname = '';
        $this->email = '';
        $this->phone_number = '';
        $this->username = '';
        $this->password = '';
    }

    public function render()
    {
        return view('livewire.clients.new-client');
    }
}
