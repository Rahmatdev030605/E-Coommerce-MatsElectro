<?php

namespace App\Livewire\ProductPage;

use App\Models\Category;
use Livewire\Component;

class FilterCategory extends Component
{
    public function render()
    {
        return view('livewire.product-page.filter-category', [
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
