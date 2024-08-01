<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Product')]
    public function render()
    {
        return view('livewire.product.index', [
            'products' => Product::all()
        ]);
    }
}
