<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Home extends Component
{

    public $message;

    public function like($id, $isLiked)
    {
        // dd(!$isLiked);
        try {
            $product = Product::find($id);
            $product->isLiked = !$isLiked;
            $product->save();

        } catch (\Exception$e) {

            dd($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.home', [
            'products' => Product::all(),
        ]);
    }
}
