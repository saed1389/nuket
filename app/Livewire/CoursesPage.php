<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Courses')]
class CoursesPage extends Component
{
    use WithPagination;
    public function render()
    {
        $courseQuery = Course::where('status', 1);
        return view('livewire.courses-page',
        ['courses' => $courseQuery->paginate(12)]
        );
    }
}
