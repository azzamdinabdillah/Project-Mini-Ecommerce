<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\product_model;
use App\Models\chart_model;
use App\Http\Livewire\CheckOut;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use RealRashid\SweetAlert\Facades\Alert;

class Chart extends Component
{
    use LivewireAlert;

    public $chart = 0;
    public $totalChart;
    public $allChartProduct;

    public $idProduct;

    protected $listeners = [
        'chartAdded' => 'addToChart',
        'checkoutConfirm',
        'confirmRemoveProductFromChart',
        'checkoutMessage',
    ];

    public function render()
    {
        if (empty(auth()->user()->username)) {
            alert()->success('<span style="color: white;">Selamat Datang :)' . '</span>')->toHtml()->background('#113F67')->toToast()->position('top-end')->autoClose(3000);
        }else{
            alert()->success('<span style="color: white;">Login Berhasil <br> Hai, ' . auth()->user()->username . '</span>')->toHtml()->background('#113F67')->toToast()->position('top-end')->autoClose(3000);
        }

        if (auth()->check() == true) {
            $this->allChartProduct = chart_model::where('user_id', auth()->user()->id)->get();
            $this->totalChart = count($this->allChartProduct);
        }

        return view('livewire.chart');
    }

    public function checkout()
    {
        $this->alert('warning', 'Yakin Beli?', [
            'position' => 'center',
            'timer' => null,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => 'checkoutConfirm',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Checkout',
            'cancelButtonText' => 'Cancel',
            'text' => 'Kamu Akan Diarahkan Ke Halaman Check Out Dahulu',
            'background' => '#113F67',
            'color' => '#fff'
        ]);
    }

    public function checkoutConfirm()
    {
        return redirect()->to('/chart/checkOut')->with('data', $this->allChartProduct);
    }

    public function addPcs($id)
    {
        $wherePcs = chart_model::find($id);

        DB::table('chart')->where('id', $id)->update([
            'pcs' => $wherePcs->pcs + 1,
        ]);
    }

    public function minPcs($id)
    {
        $wherePcs = chart_model::find($id);

        DB::table('chart')->where('id', $id)->update([
            'pcs' => $wherePcs->pcs - 1,
        ]);
    }

    public function removeProductFromChart($id)
    {
        $this->idProduct = $id;

        $this->alert('warning', 'Yakin?', [
            'position' => 'center',
            'timer' => null,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmRemoveProductFromChart',
            'showCancelButton' => true,
            'onDismissed' => '',
            'confirmButtonText' => 'Hilangkan',
            'cancelButtonText' => 'Cancel',
            'text' => 'Yakin Ingin Menghilangkan Product',
            'background' => '#113F67',
            'color' => '#fff'
        ]);
    }

    public function confirmRemoveProductFromChart()
    {
        DB::table('chart')->where('id', '=', $this->idProduct)->delete();

        $this->alert('success', 'Berhasil', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Product Berhasil Dihilangkan',
            'background' => '#113F67',
            'color' => '#fff'
        ]);
    }

    public function checkoutMessage()
    {
        $this->alert('success', 'Berhasil', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Produk Berhasil Dibeli',
            'background' => '#113F67',
            'color' => '#fff'
        ]);
    }
}
