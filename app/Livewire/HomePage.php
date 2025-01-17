<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Course;
use App\Models\Partner;
use App\Models\Teacher;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Home Page')]

class HomePage extends Component
{
    public function render()
    {
        $locale = app()->getLocale();
        $categories = Category::where('status', 1)->get();
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->limit(2)->get();
        $partners = Partner::where('status', 1)->get();
        $teachers = Teacher::where('status', 1)->get();
        $courses = Course::where('status', 1)->where('featured', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        return view('livewire.home-page', [
            'categories' => $categories,
            'blogs' => $blogs,
            'courses' => $courses,
            'locale' => $locale,
            'partners' => $partners,
            'teachers' => $teachers,
        ]);
    }
}
