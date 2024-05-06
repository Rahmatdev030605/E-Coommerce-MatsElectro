<?php

namespace App\Livewire\CategoryPage;

use Livewire\Attributes\Title;
use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        $categories = \App\Models\Category::where('is_active', 1)->get();
        return view('livewire.category-page.category', [
            'categories' => $categories,
        ]);
    }
}
