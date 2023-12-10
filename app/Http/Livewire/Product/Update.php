<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public $productId;
    public $title;
    public $description;
    public $price;
    public $image;
    public $imageOld;

    public function render()
    {
        return view('livewire.product.update');
    }
}
