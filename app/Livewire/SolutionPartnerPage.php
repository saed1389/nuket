<?php

namespace App\Livewire;

use App\Models\Additive;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Additive Page')]
class SolutionPartnerPage extends Component
{
    public function render()
    {
        $additives = Additive::query()->where('status', 1)->get();
        return view('livewire.solution-partner-page', [
            'additives' => $additives
        ]);
    }
}
