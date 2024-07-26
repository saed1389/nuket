<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Blog Details')]
class ProjectDetailPage extends Component
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

        $project = null;
        $matchedLanguage = null;

        if ($project = Project::where('slug', $this->slug)->first()) {
            $matchedLanguage = 'tr';
        } elseif ($project = Project::where('slug_en', $this->slug)->first()) {
            $matchedLanguage = 'en';
        } elseif ($project = Project::where('slug_fi', $this->slug)->first()) {
            $matchedLanguage = 'fi';
        }

        if (!$project) {
            abort(404);
        }

        return view('livewire.project-detail-page', [
            'project' => $project,
            'matchedLanguage' => $matchedLanguage,
            'lang' => $lang,
        ]);
    }
}
