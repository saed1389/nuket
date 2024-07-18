<div>
    <div class="preloader"></div>
    @livewire('partials.navbar')
    <section class="blog-page-section">
        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/icons/icon-5.png') }})"></div>
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/icons/icon-6.png') }})"></div>
        <div class="pattern-layer-three" style="background-image: url({{ asset('assets/images/icons/icon-4.png') }})"></div>
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="/">{{ __('homePage.home') }}</a></li>
                <li>{{ __('homePage.gallery') }}</li>
                <li>{{ __('homePage.videos') }}</li>
            </ul>
            <div class="content-box">
                <h2>{{ __('homePage.video gallery') }}</h2>
                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in reprehenderit in </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="row clearfix">
                @foreach($videos as $video)
                    <div class="news-block style-two col-lg-4 col-md-6 col-sm-12" wire:key="{{ $video->id }}">
                        <div class="value-img">
                            <iframe width="560" height="315" src="{{ $video->video_link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="inner-box mt-5" style="display: inline-flex">
                                <div class="lower-content">
                                    <div class="border-layer"></div>
                                    <ul class="post-info">
                                        <li>{{ __('homePage.Updated') }}  {{ $video->created_at->diffForHumans() }}</li>
                                    </ul>
                                    <h4>
                                        <a href="javascript: void (0)">
                                            @if($lang == 'tr') {{ $video->title }} @else {{ $video->{ 'title_'.$lang } }} @endif
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @livewire('partials.footer')
</div>
