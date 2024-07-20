<?php

namespace App\Livewire;

use App\Models\Service;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Coaching Page')]
class EducationPage extends Component
{
    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }

        $coaching = Service::query()->where('category', 2)->get();
        return view('livewire.education-page', [
            'education' => $coaching,
            'lang' => $lang,
        ]);
    }
}
