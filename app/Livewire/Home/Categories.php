<?php

namespace App\Livewire\Home;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $showAllCategories = false;

    public function showAll()
    {
        $this->showAllCategories = true;
    }

    public function showLess()
    {
        $this->showAllCategories = false;
    }

    public function render()
    {
        $categories = ($this->showAllCategories) ? Category::all() : Category::take(4)->get();
        return view('livewire.home.categories', [
            'categories' => $categories,
        ]);
    }
}
