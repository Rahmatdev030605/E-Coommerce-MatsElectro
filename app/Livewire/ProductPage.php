<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class ProductPage extends Component
{
    use WithPagination;

    #[Title('Products - Mats Electro')]
    public function render()
    {
        return view('livewire.product-page');
    }
}
