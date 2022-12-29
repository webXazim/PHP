<?php

namespace App\View\Components;

use App\Models\ProductCategory;
use Illuminate\View\Component;

class ProductCategoryDropdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.product-category-dropdown', [
            'categories' => ProductCategory::all(),
            'currentCategory' => ProductCategory::firstWhere('slug', request('category'))
        ]);
    }
}
