<?php

namespace App\Livewire\Form;

use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Input extends Component
{

    public $label;
    public $recovery;
    public $type;
    public $placeholder;
    public $required;

    #[Reactive]
    public $error;


    #[Modelable]
    public $value;

    public function render()
    {
        return view('livewire.form.input');
    }
}
