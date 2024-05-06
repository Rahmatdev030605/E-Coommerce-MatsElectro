<?php

namespace App\Livewire;

use Livewire\Component;

class CategoryPage extends Component
{
    #[Title('Categories - Mats Electro')]
    public function render()
    {
        return view('livewire.category-page');
    }
}
