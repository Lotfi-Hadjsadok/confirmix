<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginPage extends Component
{

    public $email;
    public $password;

    #[Layout('components.layouts.login')]
    public function render()
    {
        return view('livewire.login-page');
    }


    public function login()
    {
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, your credentials do not match our records.',
            ]);
        }
        return auth()->user()->role == "employee"
            ?  redirect()->route('employee.to-confirm')
            :  redirect()->route('employer.to-confirm');
    }
}
