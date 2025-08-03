<div>
    <div class="preloader"></div>
    @livewire('partials.navbar')
    <section class="blog-detail-banner-section">
        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/icons/icon-5.png') }})"></div>
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/icons/icon-6.png') }})"></div>
        <div class="pattern-layer-three" style="background-image: url({{ asset('assets/images/icons/icon-4.png') }})"></div>
        <div class="pattern-layer-four" style="background-image: url({{ asset('assets/images/icons/icon-8.png') }})"></div>
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="/">{{ __('homePage.home') }}</a></li>
                <li><a href="/blog">{{ __('homePage.blog') }}</a></li>
                <li>@if($lang == 'tr') {{ $categories->name }} @else {{ $categories->{ 'title_'.$lang } }} @endif</li>
            </ul>
            <div class="content-box">
                <h2>@if($lang == 'tr') {{ $categories->name }} @else {{ $categories->{ 'title_'.$lang } }} @endif <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></h2>
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="author-info">
                            <div class="author-image">
                                <img src="{{ asset('assets/images/resource/parent-2.png') }}" alt="@if($lang == 'tr') {{ $categories->blogCategory->name }} @else {{ $categories->blogCategory->{'name_' . $lang} }} @endif" />
                            </div>
                            <strong>{{ __('homePage.Post At') }}</strong>
                            {{ $categories->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="pull-right">
                        <ul class="social-box">
                            <span class="fa fa-share-alt"></span>
                            <li class="twitter"><a target="_blank" href="http://twitter.com/" class="fa fa-twitter"></a></li>
                            <li class="pinterest"><a target="_blank" href="http://pinterest.com/" class="fa fa-pinterest-p"></a></li>
                            <li class="facebook"><a target="_blank" href="http://facebook.com/" class="fa fa-facebook-f"></a></li>
                            <li class="dribbble"><a target="_blank" href="http://dribbble.com/" class="fa fa-dribbble"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sidebar-page-container style-two">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="inner-box">
                            <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img class="rounded" src="{{ url('storage', $categories->image) }}" alt="@if($lang == 'tr') {{ $categories->blogCategory->name }} @else {{ $categories->blogCategory->{'name_' . $lang} }} @endif">
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box mt-5">
                                <p>
                                    @if($lang == 'tr') {!! $categories->description !!} @else {!! $categories->{'description_'. $lang} !!} @endif
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @livewire('partials.footer')
</div>
