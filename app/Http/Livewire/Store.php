<?php

namespace App\Http\Livewire;

use App\Models\product_model;
use App\Models\Store as ModelsStore;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Store extends Component
{
    public $idStore;
    public $data;
    public $dataProduct;
    public $keyword;

    public function mount($id)
    {
        $this->idStore = $id;
    }

    public function render()
    {
        $this->data = ModelsStore::find($this->idStore);

        if ($this->keyword == null) {
            $this->dataProduct = product_model::where('store_id', $this->data->id)->get();
        }else{
            $this->dataProduct = DB::table('product')->where('name', 'like', "%$this->keyword%")->where('store_id', '=', $this->data->id)->get();
        }

        return view('livewire.store');
    }


}
