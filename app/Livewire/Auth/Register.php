<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $confirm_password = '';

    public function register()
    {
        // TODO: Custom mesesages at form
    $this->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:20',
            'confirm_password' => 'required|string|max:20|same:password',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        Auth::login($user);

        return redirect()->route('home');

    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
