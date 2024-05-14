<?php

namespace App\Livewire\ProductPage;

use App\Models\Brand;
use Livewire\Attributes\Url;
use Livewire\Component;

class FilterBrand extends Component
{
    #[Url]
    public $selected_brands = [];

    public function updatedSelectedBrands()
    {
        $this->dispatch('brandsUpdated', $this->selected_brands);
    }

    public function render()
    {
        return view('livewire.product-page.filter-brand', [
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
