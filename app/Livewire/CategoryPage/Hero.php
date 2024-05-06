<?php

namespace App\Livewire\CategoryPage;

use App\Models\Category;
use Livewire\Component;

class Hero extends Component
{
    public function render()
    {
        $categories = Category::latest()->first();
        return view('livewire.category-page.hero', [
            'categories' => $categories,
        ]);

    }
}
