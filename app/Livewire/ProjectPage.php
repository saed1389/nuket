<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Projects Page')]
class ProjectPage extends Component
{
    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }
        $projects = Project::query()->where('status', 1)->get();
        return view('livewire.project-page', [
            'projects' => $projects,
            'lang' => $lang,
        ]);
    }
}
