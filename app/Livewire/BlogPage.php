<?php

namespace App\Livewire;

use App\Models\Blog;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Blog Page')]
class BlogPage extends Component
{
    use WithPagination;
    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }

        $blogsQuery = Blog::query()->where('status', 1);
        return view('livewire.blog-page', [
            'blogs' => $blogsQuery->paginate(12),
            'lang' => $lang,
            ]);
    }
}
