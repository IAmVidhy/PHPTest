<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $product;
    public $address;
    public $price;
    
    public function render()
    {
        return view('livewire.product');
    }
}
