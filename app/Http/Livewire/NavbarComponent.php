<?php

namespace App\Http\Livewire;

use alert;
use Livewire\Component;
use App\Models\chart_model;
use App\Models\product_model;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class NavbarComponent extends Component
{   
    use LivewireAlert;

    public $chart = 0;
    public $totalChart;
    public $allChartProduct;
    public $idProducts;

    protected $listeners = [
        'chartAdded' => 'addToChart',
        'addPcs' => 'addPcs',
        'confirmed',
    ];

    public function render()
    {
        if (auth()->check() == true) {
            $this->allChartProduct = chart_model::where('user_id', auth()->user()->id)->get();
            $this->totalChart = count($this->allChartProduct);
        }

        return view('livewire.navbar-component');
    }

    public function addToChart($id)
    {
        $this->idProducts = $id;
        
        $this->alert('warning', 'Hello!', [
            'position' => 'center',
            'timer' => null,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Masukkan',
            'cancelButtonText' => 'Batal',
            'text' => 'Masukkan Ke Keranjang?',
            'timerProgressBar' => true,
            'background' => '#432C7A',
            'color' => '#fff'
           ]);

    }

    public function confirmed()
    {
        if (auth()->check() == false) {
            return $this->alert('warning', 'Gagal', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                    'text' => 'Mohon Login terlebih Dahulu',
                    'background' => '#113F67',
                    'color' => '#fff'
                ]);
        }

        $chartProduct = product_model::find($this->idProducts);

        chart_model::create([
            'name' => $chartProduct->name,
            'user_id' => auth()->user()->id,
            'category_model_id' => $chartProduct->categories->id,
            'store_id' => $chartProduct->stores->id,
            'merk' => $chartProduct->merk,
            'stock' => $chartProduct->stock,
            'kondisi' => $chartProduct->kondisi,
            'deskripsi' => $chartProduct->deskripsi,
            'price' => $chartProduct->price,
            'img' => $chartProduct->img,
            'pcs' => 1,
        ]);

        $this->chart++;

        $this->alert('success', 'Berhasil', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Produk Berhasil Dimasukkan Keranjang',
            'background' => '#113F67',
            'color' => '#fff'
           ]);
    }
}

