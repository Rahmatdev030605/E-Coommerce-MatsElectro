<?php

namespace App\Livewire\ProductPage;

use App\Livewire\Home\Brands;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class IndexProduct extends Component
{
    use WithPagination;

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $selected_brands = [];

    #[Url]
    public $featured;
    #[Url]
    public $on_sale;

    #[Url]
    public $price_range = 50000000;


    // protected $listeners = [
    //     'categoriesUpdated' => 'updateCategories',
    //     'brandsUpdated' => 'updateBrands',
    // ];

    public function updateCategories($categories)
    {
        $this->selected_categories = $categories;
        // dd($this->selected_categories);
        $this->resetPage();
    }

    public function updateBrands($brands)
    {
        $this->selected_brands = $brands;
        // dd($this->selected_brands);
        $this->resetPage();
    }

    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);

        if (!empty($this->selected_categories)) {
            $productQuery->whereIn('category_id', $this->selected_categories);
        }

        if (!empty($this->selected_brands)) {
            $productQuery->whereIn('brand_id', $this->selected_brands);
        }

        if ($this->featured) {
            $productQuery->where('is_featured', 1);
        }

        if ($this->on_sale) {
            $productQuery->where('on_sale', 1);
        }

        if($this->price_range) {
            $productQuery->whereBetween('price', [0, $this->price_range]);
        }

        return view('livewire.product-page.index-product', [
            'products' => $productQuery->paginate(12),
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']),
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
