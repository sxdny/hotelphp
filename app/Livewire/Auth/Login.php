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
       $fields = $this->validate([
            'email' => 'required|email|max:20',
            'password' => 'required|string|max:20'
        ]);

        // segundo parámetro es un remember me, configuarlo después
        if(Auth::attempt($fields, true)) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'failed' => 'failed' 
            ]);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
