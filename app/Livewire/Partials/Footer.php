<?php

namespace App\Livewire\Partials;

use App\Models\Category;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $categories = Category::where('status', 1)->get();
        return view('livewire.partials.footer', [
            'categories' => $categories,
        ]);
    }
}
