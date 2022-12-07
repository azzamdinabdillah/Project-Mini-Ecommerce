<?php

namespace App\Http\Livewire;

use App\Models\product_model;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AllProduct extends Component
{
    public $data2;
    public $data;
    public $keyword = null;

    public function render()
    {
        if ($this->keyword == null) {
            $this->data = DB::table('product')->join('store', 'store.id', '=', 'product.store_id')->get();
            // dd($this->data);
        }else{
            $this->data = DB::table('product')->where('name', 'like', "%$this->keyword%")->join('store', 'store.id', '=', 'product.store_id')->select('product.*', 'store.nameStore')->get();
        }

        return view('livewire.all-product');
    }
}
