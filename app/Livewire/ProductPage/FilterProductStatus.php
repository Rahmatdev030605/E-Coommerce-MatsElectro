<?php

namespace App\Livewire\ProductPage;

use Livewire\Attributes\Url;
use Livewire\Component;

class FilterProductStatus extends Component
{
    #[Url]
    public $featured;

    public function updateSelectedFeatured()
    {
        $this->dispatch('featuredUpdated', $this->featured);
    }
    public function render()
    {
        return view('livewire.product-page.filter-product-status');
    }
}
