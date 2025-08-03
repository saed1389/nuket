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
                <li>{{ __('homePage.About us') }}</li>
            </ul>
            <div class="content-box">
                <h2>{{ __('homePage.About us') }} <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></h2>
                <div class="text">&nbsp;</div>
            </div>
        </div>
    </section>

    <section class="professional-section style-two">
        <div class="background-layer-one" style="background-image:url({{ asset('assets/images/background/pattern-5.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-3.png') }})"></div>
                        <div class="pattern-layer-two" style="background-image:url({{ asset('assets/images/background/pattern-4.png') }})"></div>
                        <div class="color-layer"></div>
                        <div class="color-layer-two"></div>
                        <div class="image wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <img src="{{ asset('assets/images/gulnaz.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-three" style="background-image:url({{ asset('assets/images/background/pattern-16.png') }})"></div>
                        <div class="sec-title">
                            <h2>Gülnaz Umsu <small> ({{ __('homePage.Founder') }})</small></h2>
                        </div>
                        <p>{{ __('homePage.about description 1') }}</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="professional-section style-two">
        <div class="background-layer-one" style="background-image:url({{ asset('assets/images/background/pattern-5.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-three" style="background-image:url({{ asset('assets/images/background/pattern-16.png') }})"></div>
                        <div class="sec-title">
                            <h2>Özgür Eren <small> ({{ __('homePage.Founder') }})</small></h2>
                        </div>
                        <p>{{ __('homePage.about description 2') }}</p>
                    </div>
                </div>
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-3.png') }})"></div>
                        <div class="pattern-layer-two" style="background-image:url({{ asset('assets/images/background/pattern-4.png') }})"></div>
                        <div class="color-layer"></div>
                        <div class="color-layer-two"></div>
                        <div class="image wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <img src="{{ asset('assets/images/ozgur.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="professional-section style-two">
        <div class="background-layer-one" style="background-image:url({{ asset('assets/images/background/pattern-5.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-3.png') }})"></div>
                        <div class="pattern-layer-two" style="background-image:url({{ asset('assets/images/background/pattern-4.png') }})"></div>
                        <div class="color-layer"></div>
                        <div class="color-layer-two"></div>
                        <div class="image wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <img src="{{ asset('assets/images/nuket.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-three" style="background-image:url({{ asset('assets/images/background/pattern-16.png') }})"></div>
                        <div class="sec-title">
                            <h2>Dr. Nüket Aygen Eren <small> ({{ __('homePage.Founder') }})</small></h2>
                        </div>
                        <p>{{ __('homePage.about description 3') }}</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    @livewire('partials.footer')
</div>
