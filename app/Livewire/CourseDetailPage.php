<?php

namespace App\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\App;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Course Details Page')]
class CourseDetailPage extends Component
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

        $course = null;
        $matchedLanguage = null;

        if ($course = Course::where('slug', $this->slug)->first()) {
            $matchedLanguage = 'tr';
        } elseif ($course = Course::where('slug_en', $this->slug)->first()) {
            $matchedLanguage = 'en';
        } elseif ($course = Course::where('slug_fi', $this->slug)->first()) {
            $matchedLanguage = 'fi';
        }

        if (!$course) {
            abort(404);
        }

        return view('livewire.course-detail-page', [
            'course' => $course,
            'matchedLanguage' => $matchedLanguage,
            'lang' => $lang,
        ]);
    }
}
