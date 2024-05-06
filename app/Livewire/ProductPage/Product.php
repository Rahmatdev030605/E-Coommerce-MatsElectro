<?php

namespace App\Livewire\ProductPage;

use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;
    public function render()
    {
        $productQuery = \App\Models\Product::query()->where('is_active', 1);
        return view('livewire.product-page.product', [
            'products' => $productQuery->paginate(6),
        ]);
    }
}
