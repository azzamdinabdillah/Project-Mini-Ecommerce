<?php

namespace App\Http\Livewire;

use App\Models\category_model;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CategoriesDetails extends Component
{
    use LivewireAlert;

    public $keyword = null;
    public $judulCategory;
    public $idCategory;
    public $searchResult = null;
    public $data;

    public function mount($judul, $idCategory)
    {
        $this->judulCategory = $judul;
        $this->idCategory = $idCategory;
    }

    public function render()
    {
        // dd($this->idCategory);

        if ($this->keyword == null) {
            $ProductByCategory = category_model::where('nameCategory', $this->judulCategory)->first();

            // $ProductByCategory = DB::table('category')->where('name', '=', $this->judulCategory)->join('store', 'store.id', 'product.store_id')->first();
    
            // dd($ProductByCategory->products);
            
            $this->data = $ProductByCategory->products;
        }else{
            $result = DB::table('product')->where('name', 'like', "%$this->keyword%")->where('category_model_id', $this->idCategory)->join('store', 'store.id', 'product.store_id')->select('product.*', 'store.nameStore')->get();

            $this->data = $result;

            // dd($this->data);
        }


        return view('livewire.categories-details');
    }

    // public function searchByCategories()
    // {
    //     $result = DB::table('product')->where('name', 'like', "%$this->keyword%")->where('category_model_id', 2)->get();

    //     $this->data = $result;
    // }
}
