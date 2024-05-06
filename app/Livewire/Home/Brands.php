<?php

namespace App\Livewire\Home;

use App\Models\Brand;
use Livewire\Component;

class Brands extends Component
{
    public $showAllBrands = false;

    public function showAll()
    {
        $this->showAllBrands = true;
    }

    public function showLess()
    {
        $this->showAllBrands = false;
    }

    public function render()
    {
        $brands = ($this->showAllBrands) ? Brand::all() : Brand::take(4)->get();
        return view('livewire.home.brands', ['brands' => $brands]);
    }
}
