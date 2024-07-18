<?php

namespace App\Livewire;

use App\Models\Gallery;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Video Gallery Page')]
class VideoPage extends Component
{
    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }

        $videos = Gallery::query()->where('category', 2)->get();
        return view('livewire.video-page', [
            'videos' => $videos,
            'lang' => $lang,
        ]);
    }
}
