<?php

namespace App\Livewire\Partials;

use App\Models\Category;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        $categories = Category::where('status', 1)->get();
        return view('livewire.partials.navbar', ['categories' => $categories]);
    }
}
