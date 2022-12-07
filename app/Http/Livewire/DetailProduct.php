<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\product_model;
use App\Models\chart_model;

class DetailProduct extends Component
{
    public $detail;

    public function mount($detailProduct)
    {
        $this->detail = $detailProduct;
    }

    public function render()
    {
        return view('livewire.detail-product');
    }
}
