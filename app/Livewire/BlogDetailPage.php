<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\App;

#[Title('Blog Details')]
class BlogDetailPage extends Component
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

        if ($blog = Blog::where('slug', $this->slug)->first()) {
            $matchedLanguage = 'tr';
        } elseif ($blog = Blog::where('slug_en', $this->slug)->first()) {
            $matchedLanguage = 'en';
        } elseif ($blog = Blog::where('slug_fi', $this->slug)->first()) {
            $matchedLanguage = 'fi';
        }

        if (!$blog) {
            abort(404);
        }

        $relatedBlogs = Blog::query()->where('blog_category_id', $blog->blog_category_id)->where('status', 1);

        return view('livewire.blog-detail-page', [
            'blog' => $blog,
            'lang' => $lang,
            'matchedLanguage' => $matchedLanguage,
            'relatedBlogs' => $relatedBlogs->orderBy('id', 'desc')->limit(5)->get(),
        ]);
    }
}
