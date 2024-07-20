<?php

namespace App\Livewire;

use App\Models\Service;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Coaching Page')]
class CoachingPage extends Component
{
    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }

        $coaching = Service::query()->where('category', 1)->get();

        return view('livewire.coaching-page', [
            'coaching' => $coaching,
            'lang' => $lang,
        ]);
    }
}
