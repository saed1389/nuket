<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Blog Page')]
class BlogPage extends Component
{
    public function render()
    {
        return view('livewire.blog-page');
    }
}
