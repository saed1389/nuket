<?php

namespace App\Livewire;

use App\Models\Additive;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Solution partner detail')]
class SolutionPartnerDetailPage extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }

        $solution = null;
        $matchedLanguage = null;

        if ($solution = Additive::where('id', $this->id)->first()) {
            $matchedLanguage = 'tr';
        } elseif ($solution = Additive::where('id', $this->id)->first()) {
            $matchedLanguage = 'en';
        } elseif ($solution = Additive::where('id', $this->id)->first()) {
            $matchedLanguage = 'fi';
        }

        if (!$solution) {
            abort(404);
        }

        return view('livewire.solution-partner-detail-page', [
            'solution' => $solution,
            'matchedLanguage' => $matchedLanguage,
            'lang' => $lang,
        ]);
    }
}
