<?php

namespace App\Livewire\Employee;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginPage extends Component
{
    public function render()
    {
        return view('livewire.employee.login-page');
    }
}
