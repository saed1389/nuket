<?php

namespace App\Livewire;

use App\Models\Workshop;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Workshop Page')]
class WorkshopPage extends Component
{
    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }
        $workshops = Workshop::where('status', 1)->get();

        return view('livewire.workshop-page', [
            'workshops' => $workshops,
            'lang' => $lang,
        ]);
    }
}
