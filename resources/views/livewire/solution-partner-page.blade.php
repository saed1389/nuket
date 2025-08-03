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
                <li>{{ __('homePage.Solution partners') }}</li>
            </ul>
            <div class="content-box">
                <h2>{{ __('homePage.Solution partners') }} <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></h2>
                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in reprehenderit in </div>
            </div>
        </div>
    </section>
    <section class="team-section-two">
        <div class="auto-container">
            <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-18.png') }})"></div>
            <div class="pattern-layer-two" style="background-image:url({{ asset('assets/images/background/pattern-19.png') }})"></div>
            <div class="pattern-layer-three" style="background-image:url({{ asset('assets/images/icons/icon-4.png') }})"></div>
            <div class="pattern-layer-four" style="background-image:url({{ asset('assets/images/icons/icon-4.png') }})"></div>
            <div class="inner-container">
                <div class="pattern-layer-five" style="background-image:url({{ asset('assets/images/icons/icon-2.png') }})"></div>
                <div class="color-layer"></div>
                <div class="row clearfix">
                    @foreach($additives as $additive)
                        <div class="team-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ route('about.solution.partner', $additive->id) }}"><img src="{{ url('storage', $additive->image) }}" alt="{{ $additive->name }}" /></a>
                                </div>
                                <div class="lower-content">
                                    <h5><a href="j{{ route('about.solution.partner', $additive->id) }}">{{ $additive->name }}</a></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @livewire('partials.footer')
</div>
