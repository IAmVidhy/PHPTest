<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Prepaid extends Component
{
    public $phone;
    public $value;

    public function render()
    {
        return view('livewire.prepaid');
    }

}
