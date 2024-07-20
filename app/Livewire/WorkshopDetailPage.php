<?php

namespace App\Livewire;

use App\Models\Workshop;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Workshop Detail Page')]
class WorkshopDetailPage extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }

        $blog = null;
        $matchedLanguage = null;

        if ($blog = Workshop::where('slug', $this->slug)->first()) {
            $matchedLanguage = 'tr';
        } elseif ($blog = Workshop::where('slug_en', $this->slug)->first()) {
            $matchedLanguage = 'en';
        } elseif ($blog = Workshop::where('slug_fi', $this->slug)->first()) {
            $matchedLanguage = 'fi';
        }

        $relatedBlogs = Workshop::query()->where('status', 1);

        if (!$blog) {
            abort(404);
        }

        return view('livewire.workshop-detail-page', [
            'workshop' => $blog,
            'matchedLanguage' => $matchedLanguage,
            'relatedWorkshops' => $relatedBlogs->orderBy('id', 'desc')->inRandomOrder()->limit(3)->get(),
            'lang' => $lang,
        ]);
    }
}
