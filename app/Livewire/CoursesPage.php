<?php

namespace App\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Courses page')]
class CoursesPage extends Component
{
    public function render()
    {
        if (session('locale')) {
            $lang = session('locale');
        } else {
            $lang = App::getLocale();
        }

        $courseQuery = Course::where('status', 1);
        $count = $courseQuery->count();
        return view('livewire.courses-page', [
                'courses' => $courseQuery->get(),
                'lang' => $lang,
                'count' => $count
            ]
        );
    }
}
