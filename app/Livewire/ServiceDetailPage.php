<?php

namespace App\Livewire;

use App\Models\Service;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class ServiceDetailPage extends Component
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

        if ($blog = Service::where('slug', $this->slug)->first()) {
            $matchedLanguage = 'tr';
        } elseif ($blog = Service::where('slug_en', $this->slug)->first()) {
            $matchedLanguage = 'en';
        } elseif ($blog = Service::where('slug_fi', $this->slug)->first()) {
            $matchedLanguage = 'fi';
        }

        if (!$blog) {
            abort(404);
        }

        $relatedBlogs = Service::query()->where('category', $blog->category)->where('status', 1);

        return view('livewire.service-detail-page', [
            'service' => $blog,
            'relatedServices' => $relatedBlogs,
            'matchedLanguage' => $matchedLanguage,
            'lang' => $lang,
        ]);
    }
}
