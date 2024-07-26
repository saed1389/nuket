<div>
    <div class="preloader"></div>
    @livewire('partials.navbar')
    <section class="banner-section-three style-two">
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/background/pattern-21.png') }})"></div>
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="/">{{ __('homePage.home') }}</a></li>
                <li>{{ __('homePage.Training') }}</li>
            </ul>
            <div class="row clearfix">
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/main-slider/pattern-1.png') }})"></div>
                        <div class="icon-layer" style="background-image: url({{ asset('assets/images/icons/icon-2.png') }})"></div>
                        <div class="icon-layer-two" style="background-image: url({{ asset('assets/images/icons/icon-5.png') }})"></div>
                        <h2> {{ __('homePage.Training') }}</h2>
                    </div>
                </div>
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="icon-layer-three" style="background-image: url({{ asset('assets/images/icons/icon-3.png') }})"></div>
                        <div class="icon-layer-four" style="background-image: url({{ asset('assets/images/icons/icon-2.png') }})"></div>
                        <div class="icon-layer-five" style="background-image: url({{ asset('assets/images/icons/icon-4.png') }})"></div>
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/page-title-3.jpg') }}" alt="" />
                        </div>
                        <div class="image-two">
                            <img src="{{ asset('assets/images/resource/page-title-4.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses-page-section">
        <div class="pattern-layer" style="background-image:url({{ asset('images/background/pattern-22.png') }})"></div>
        <div class="pattern-layer-two" style="background-image:url({{ asset('images/background/pattern-6.png') }})"></div>
        <div class="pattern-layer-three" style="background-image:url({{ asset('images/background/pattern-19.png') }})"></div>
        <div class="pattern-layer-four" style="background-image:url({{ asset('images/background/pattern-23.png') }})"></div>
        <div class="auto-container">
            <div class="filter-box">
                <div class="box-inner">
                    <div class="clearfix">
                        <div class="pull-right">
                            <div class="total-course"> {{ __('homePage.We found :count courses available for you', ['count' => $count ]) }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                @foreach($courses as $course)
                    <div class="course-block col-lg-4 col-md-6 col-sm-12" wire:key="{{ $course->id }}">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="@if($lang == 'tr') {{ '/courses/'.$course->slug }} @else {{ '/courses/'.$course->{'slug_' . $lang} }} @endif">
                                    <img src="{{ url('storage', $course->image) }}" alt="@if($lang == 'tr') {{ $course->name }} @else {{ $course->{ 'name_'.$lang } }} @endif" />
                                </a>
                            </div>
                            <div class="lower-content">
                                <h4>
                                    <a href="@if($lang == 'tr') {{ '/courses/'.$course->slug }} @else {{ '/courses/'.$course->{'slug_' . $lang} }} @endif">
                                        @if($lang == 'tr') {{ $course->name }} @else {{ $course->{ 'name_'.$lang } }} @endif
                                    </a>
                                </h4>
                                <div class="uni-name">@if($lang == 'tr') {{ $course->category->name }} @else {{ $course->category->{'name_' . $lang} }} @endif</div>
                                @if($course->price)
                                    @if($course->discount)
                                        <div class="price">{{ \Illuminate\Support\Number::currency($course->discount, 'EUR') }}  <span>{{ \Illuminate\Support\Number::currency($course->price, 'EUR') }}</span></div>
                                    @else
                                        <div class="price">{{ \Illuminate\Support\Number::currency($course->price, 'EUR') }} </div>
                                    @endif
                                @else
                                    <div class="price"> - </div>
                                @endif
                                <div class="clearfix">
                                    <div class="pull-right">
                                        <a href="@if($lang == 'tr') {{ '/courses/'.$course->slug }} @else {{ '/courses/'.$course->{'slug_' . $lang} }} @endif" class="enroll-now">{{ __('homePage.ENROL NOW') }}</a>
                                    </div>
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
