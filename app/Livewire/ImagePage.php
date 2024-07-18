<?php

namespace App\Livewire;

use App\Models\Gallery;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Image Gallery Page')]
class ImagePage extends Component
{
    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }

        $images = Gallery::query()->where('category', 1)->get();
        return view('livewire.image-page',[
            'images' => $images,
            'lang' => $lang,
        ]);
    }
}
