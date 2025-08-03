<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Category Detail')]
class CategoryDetailPage extends Component
{
    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }

        $courseQuery = Category::where('status', 1);

        return view('livewire.category-detail-page', [
                'categories' => $courseQuery->get(),
                'lang' => $lang,
            ]
        );
    }
}
