<div>
    <div class="preloader"></div>
    @livewire('partials.navbar')
    <section class="banner-section-three">
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/background/pattern-21.png') }})"></div>
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="/">{{ __('homePage.home') }}</a></li>
                <li>{{ __('homePage.About us') }}</li>
            </ul>
            <div class="row clearfix">
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/main-slider/pattern-1.png') }})"></div>
                        <div class="icon-layer" style="background-image: url({{ asset('assets/images/icons/icon-2.png') }})"></div>
                        <div class="icon-layer-two" style="background-image: url({{ asset('assets/images/icons/icon-5.png') }})"></div>
                        <h2>{{ __('homePage.About us') }}</h2>
                    </div>
                </div>
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="icon-layer-three" style="background-image: url({{ asset('assets/images/icons/icon-3.png') }})"></div>
                        <div class="icon-layer-four" style="background-image: url({{ asset('assets/images/icons/icon-2.png') }})"></div>
                        <div class="icon-layer-five" style="background-image: url({{ asset('assets/images/icons/icon-4.png') }})"></div>
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/page-title-1.jpg') }}" alt="" />
                        </div>
                        <div class="image-two">
                            <img src="{{ asset('assets/images/resource/page-title-2.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('partials.footer')
</div>
