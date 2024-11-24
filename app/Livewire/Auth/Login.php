<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Component;
use App\Models\Client;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function login()
    {
       $validatedFields = $this->validate([
            'email' => 'required|email|max:20',
            'password' => 'required|string|max:20'
        ]);

        // segundo parámetro es un remember me, configuarlo después
        if(Auth::attempt($validatedFields, true)) {
            return redirect()->route('home');
        } else {
            return $this->addError('failed', 'These credentials are not found in our database...');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
