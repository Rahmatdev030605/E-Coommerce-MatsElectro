<?php

namespace App\Livewire;

use App\Models\Brand;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{

    #[Title('Homepage - Mats Electro')]
    public function render()
    {
        return view('livewire.home-page');
    }
}
