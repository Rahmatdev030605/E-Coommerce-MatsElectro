<?php

namespace App\Livewire\ProductPage;

use App\Models\Brand;
use Livewire\Component;

class FilterBrand extends Component
{
    public function render()
    {
        return view('livewire.product-page.filter-brand', [
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
