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
                <li>{{ __('homePage.workshops') }}</li>
            </ul>
            <div class="content-box">
                <h2>{{ __('homePage.workshops') }} <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></h2>
                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in reprehenderit in </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="row clearfix">
                @foreach($workshops as $item)
                    <div class="news-block style-two col-lg-4 col-md-6 col-sm-12" wire:key="{{ $item->id }}">
                        <div class="value-img">
                            <a href="@if($lang == 'tr') {{ '/workshop/'.$item->slug }} @else {{ '/workshop/'.$item->{'slug_' . $lang} }} @endif">
                                <img src="{{ url('storage', $item->image) }}" data-action="zoom" data-original="{{ url('storage', $item->image) }}" alt="@if($lang == 'tr') {{ $item->title }} @else {{ $item->{ 'title_'.$lang } }} @endif" loading="lazy" />
                            </a>
                        </div>
                        <div class="inner-box">
                            <div class="lower-content">
                                <div class="border-layer"></div>
                                <ul class="post-info">
                                    <li>{{ __('homePage.Updated') }}  {{ $item->created_at->diffForHumans() }}</li>
                                </ul>
                                <h4>
                                    <a href="@if($lang == 'tr') {{ '/workshop/'.$item->slug }} @else {{ '/workshop/'.$item->{'slug_' . $lang} }} @endif">
                                        @if($lang == 'tr') {{ $item->title }} @else {{ $item->{ 'title_'.$lang } }} @endif
                                    </a>
                                </h4>
                                <a href="@if($lang == 'tr') {{ '/workshop/'.$item->slug }} @else {{ '/workshop/'.$item->{'slug_' . $lang} }} @endif" class="more">{{ __('homePage.More') }} <span class="fa fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @livewire('partials.footer')
</div>
