<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\chart_model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CheckOut extends Component
{
    use LivewireAlert;

    public $dataChart;
    public $invoice;

    protected $listeners = [
        'checkoutConfirm',
        'checkoutMessage'
    ];

    public function render()
    {
        // dd(session()->get('data'));
        $this->dataChart = chart_model::where('user_id', auth()->user()->id)->get();
        // dd($this->dataChart);
        
        return view('livewire.check-out');
    }

    public function checkout()
    {   
        $this->alert('info', 'Yakin?', [
            'position' => 'center',
            'timer' => false,
            'toast' => false,
            'text' => 'Apakah anda yakin mau checkout?, Gak bayar kok wkwkwkwwk',
            'showConfirmButton' => true,
            'onConfirmed' => 'checkoutConfirm',
            'showCancelButton' => true,
            'onDismissed' => '',
            'background' => '#113F67',
            'color' => '#fff',
            'confirmButtonText' => 'Chekout',
           ]);

        // $this->invoice = Str::random(30);

    }

    public function checkoutConfirm()
    {
        $this->emit('checkoutMessage');
        
        // return redirect()->to('/chart');
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

        DB::table('chart')->delete();
    }
}
