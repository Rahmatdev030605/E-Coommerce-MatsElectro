<?php

namespace App\Livewire\ProductPage;

use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;

class FilterCategory extends Component
{
    #[Url]
    public $selected_categories = [];

    public function updatedSelectedCategories()
    {
        $this->dispatch('categoriesUpdated', $this->selected_categories);
    }

    public function render()
    {
        return view('livewire.product-page.filter-category', [
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
