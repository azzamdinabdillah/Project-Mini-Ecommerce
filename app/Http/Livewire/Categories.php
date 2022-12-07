<?php

namespace App\Http\Livewire;

use App\Models\category_model;
use Illuminate\Http\Request;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Categories extends Component
{
    use LivewireAlert;
    
    public $allCategories;

    public function mount($dataCategories)
    {
        $this->allCategories = $dataCategories;
    }

    public function render(Request $request)
    {
        return view('livewire.categories');
    }

    
}
