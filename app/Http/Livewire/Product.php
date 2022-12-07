<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{   
    public $data;
    public $chart = 1;

    public function mount($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('livewire.product');
    }
}
