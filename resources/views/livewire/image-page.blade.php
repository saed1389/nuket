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
                <li>{{ __('homePage.images') }}</li>
            </ul>
            <div class="content-box">
                <h2>{{ __('homePage.image gallery') }} <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></h2>
                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in reprehenderit in </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="row clearfix">
                @foreach($images as $image)
                    <div class="news-block style-two col-lg-4 col-md-6 col-sm-12" wire:key="{{ $image->id }}">
                        <div class="value-img">
                            <img src="{{ url('storage', $image->image) }}" data-action="zoom" data-original="{{ url('storage', $image->image) }}" alt="@if($lang == 'tr') {{ $image->title }} @else {{ $image->{ 'title_'.$lang } }} @endif" loading="lazy" />
                        </div>
                        <div class="inner-box">
                            <div class="lower-content">
                                <div class="border-layer"></div>
                                <ul class="post-info">
                                    <li>{{ __('homePage.Updated') }}  {{ $image->created_at->diffForHumans() }}</li>
                                </ul>
                                <h4>
                                    <a href="javascript: void (0)">
                                        @if($lang == 'tr') {{ $image->title }} @else {{ $image->{ 'title_'.$lang } }} @endif
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @livewire('partials.footer')
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script>
</div>
