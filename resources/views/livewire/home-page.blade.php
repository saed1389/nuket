<div>
    <div class="preloader"></div>
    @livewire('partials.navbar')
    <section class="banner-section">
        <div class="auto-container">
            <div class="pattern-layer-six" style="background-image: url({{ asset('assets/images/main-slider/pattern-4.png') }})"></div>
            <div class="pattern-layer-seven" style="background-image: url({{ asset('assets/images/main-slider/pattern-5.png') }})"></div>
            <div class="pattern-layer-eight" style="background-image: url({{ asset('assets/images/main-slider/icon-2.png') }})"></div>
            <div class="row clearfix">
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/main-slider/pattern-1.png') }})"></div>
                        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/main-slider/pattern-2.png') }})"></div>
                        <div class="pattern-layer-three" style="background-image: url({{ asset('assets/images/main-slider/icon-1.png') }})"></div>
                        <div class="pattern-layer-four" style="background-image: url({{ asset('assets/images/main-slider/pattern-3.png') }})"></div>
                        <div class="pattern-layer-five" style="background-image: url({{ asset('assets/images/main-slider/icon-2.png') }})"></div>
                        <div class="image">
                            <img src="{{ asset('assets/images/main-slider/image-1.png') }}" alt="" />
                        </div>
                        <div class="image-two">
                            <img src="{{ asset('assets/images/main-slider/image-4.png') }}" alt="" />
                        </div>
                        <div class="image-content" style="background-image: url({{ asset('assets/images/main-slider/pattern-6.png') }})">
                            <p>{{ __('homePage.87% of people learning') }}</p>
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title">{{ __('homePage.Learn the latest skills') }} <img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></div>
                        <h1>{{ __('homePage.Turn obstacles into opportunities and discover what you can do!') }}</h1>
                        <div class="btns-box">
                            <a href="/contact" class="theme-btn btn-style-one"><span class="txt">{{ __('homePage.contact us') }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="instructor-section">
        <div class="background-layer" style="background-image:url({{ asset('assets/images/background/1.png') }})"></div>
        <div class="background-layer-one" style="background-image:url({{ asset('assets/images/background/pattern-1.png') }})"></div>
        <div class="background-layer-two" style="background-image:url({{ asset('assets/images/background/pattern-2.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="blocks-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">
                            <div class="service-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="border-layer"></div>
                                    <div class="icon-box">
                                        <div class=""><a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px; margin-top: 14px; margin-left: 12px;"></a></div>
                                    </div>
                                    <h4><a href="/services/education">{{ __('homePage.education') }}  </a></h4>
                                    <div class="text">{{ __('homePage.Olektia offers ICF-approved basic coaching training for deaf and those working with them..') }}</div>
                                </div>
                            </div>
                            <div class="service-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                                    <div class="border-layer"></div>
                                    <div class="icon-box">
                                        <div class=""><a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px; margin-top: 14px; margin-left: 12px;"></a></div>
                                    </div>
                                    <h4><a href="/services/coaching">{{ __('homePage.coaching') }}  </a></h4>
                                    <div class="text">{{ __('homePage.Individuals who are deaf, those who can hear, and everyone communicating with deaf can participate..') }} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="instructor-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h4>{{ __('homePage.Become a Trainer') }}  <img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></h4>
                        <p>{{ __('homePage.If you are interested in working with us as a trainer in coaching, sign language, and vocational training for deaf, please contact us using the details below!') }}</p>
                        <a class="click-here" href="">{{ __('homePage.Click here for apply') }}</a>
                        <div class="image titlt" data-tilt data-tilt-max="4">
                            <img src="{{ asset('assets/images/resource/instructor.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefit-section">
        <div class="background-layer-one" style="background-image:url({{ asset('assets/images/background/pattern-5.png') }})"></div>
        <div class="background-layer-two" style="background-image:url({{ asset('assets/images/background/pattern-6.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="images-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-3.png') }})"></div>
                        <div class="pattern-layer-two" style="background-image:url({{ asset('assets/images/background/pattern-4.png') }})"></div>
                        <div class="color-layer"></div>
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/benefit-1.png') }}" alt="" />
                        </div>
                        <div class="image-two">
                            <img src="{{ asset('assets/images/resource/benefit-3.png') }}" alt="" />
                        </div>
                        <div class="image-three">
                            <img src="{{ asset('assets/images/resource/benefit-2.png') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">{{ __('homePage.Learn anything') }}</div>
                            <h2>{{ __('homePage.Olektia was founded by experts in sign language and coaching applications') }} <img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></h2>
                        </div>
                        <ul class="list-style-one">
                            <li><span class="icon flaticon-double-check"></span><strong>{{ __('homePage.About us') }}</strong>{{ __('homePage.about home1') }} </li>
                            <li><span class="icon flaticon-double-check"></span><strong>{{ __('homePage.Solution partners') }}</strong>{{ __('homePage.about home2') }}</li>
                            <li><span class="icon flaticon-double-check"></span><strong>{{ __('homePage.projects') }}</strong>{{ __('homePage.about home3') }}</li>
                        </ul>
                        <div class="btn-box">
                            <a href="/about" class="theme-btn btn-style-two"><span class="txt">{{ __('homePage.Read More') }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-text">
                <p>{{ __('homePage.We share our thoughts, feelings, and experiences with you in this section!') }}</p>
            </div>
        </div>
    </section>
    <section class="feature-section">
        <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-7.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <div class="title">{{ __('homePage.ENROLLMENT IN TRAININGS') }}</div>
                            <h2>{{ __('homePage.For deaf individuals, all information about training and coaching activities is here!') }} <img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></h2>
                            <div class="text">{{ __('homePage.To register for trainings, you can contact us using the details below between Monday-Friday from 10:00 AM to 5:00 PM.') }}
                                <br>
                                {{ __('homePage.Phone Number') }}: <a href="tel:+358415775343">+358 415 775 343</a>
                                <br>
                                {{ __('homePage.Phone Number') }}: <a href="tel:+358415775344">+358 415 775 344</a>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="/courses" class="theme-btn btn-style-two"><span class="txt">{{ __('homePage.Courses') }}</span></a>
                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="color-layer"></div>
                        <div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('assets/images/resource/feature.png') }}" alt="" loading="lazy" />
                            <div class="overlay-box">
                                <div class="content">
                                    <h2>{{ __('homePage.LIVE SUPPORT SECTION') }}</h2>
                                    <p>
                                        {{ __('homePage.Deaf can receive live assistance through video calls on WhatsApp for more detailed information about trainings and coaching sessions, Monday-Friday from 10:00 AM to 5:00 PM.') }}
                                    </p>
                                    <p>{{ __('homePage.Sign Language Live Help') }} <br>  {{ __('homePage.WhatsApp no') }}: <a href="https://api.whatsapp.com/send?phone=358415775345" target="_blank">+358 415 775 345</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-icon wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{ asset('assets/images/log.png') }}" style="width: 150px;" alt="" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses-section">
        <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-2.png') }})"></div>
        <div class="circle-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
        <div class="circle-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>{{ __('homePage.You can learn anything, explore featured courses') }} <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></h2>
                <div class="text">{{ __('homePage.Home page blog description') }}</div>
            </div>
            <div class="row clearfix">
                @foreach($courses as $course)
                    <div class="course-block col-lg-4 col-md-6 col-sm-12" wire:key="{{ $course->id }}">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="@if($locale == 'tr') {{ '/courses/'.$course->slug }} @else {{ '/courses/'.$course->{'slug_' . $locale} }} @endif">
                                    <img src="{{ url('storage', $course->image) }}" alt="" />
                                </a>
                            </div>
                            <div class="lower-content">
                                <h4>
                                    <a href="@if($locale == 'tr') {{ '/courses/'.$course->slug }} @else {{ '/courses/'.$course->{'slug_' . $locale} }} @endif">
                                        @if($locale == 'tr') {{ $course->name }} @else {{ $course->{'name_' . $locale} }} @endif
                                    </a>
                                </h4>
                                <div class="uni-name">@if($locale == 'tr') {{ $course->category->name }} @else {{ $course->category->{'name_' . $locale} }} @endif</div>
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
                                        <a href="@if($locale == 'tr') {{ '/courses/'.$course->slug }} @else {{ '/courses/'.$course->{'slug_' . $locale} }} @endif" class="enroll-now">{{ __('homePage.ENROL NOW') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="circle-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
        <div class="circle-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
        <div class="pattern-layer-two" style="background-image:url({{ asset('assets/images/background/pattern-10.png') }})"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-9.png') }})"></div>
                <div class="sec-title centered">
                    <div class="title">{{ __('homePage.Trainers') }}</div>
                    <h2>Olektia {{ __('homePage.Trainers') }} <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></h2>
                    <div class="text">{{ __('homePage.home page trainer description') }}</div>
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme">
                    @foreach($teachers as $teacher)
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="text">
                                    @if($locale == 'tr') {!! $teacher->description !!} @else {{ $teacher->{ 'description_'.$locale } }} @endif
                                </div>
                                <div class="author-info">
                                    <div class="info-inner">
                                        <div class="author-image">
                                            <img src="{{ url('storage', $teacher->image) }}" alt="{{ $teacher->name }}" />
                                        </div>
                                        <h6>{{ $teacher->name }}</h6>
                                        <div class="designation"> @if($locale == 'tr') {{ $teacher->category->name }} @else {{ $teacher->category->{ 'name_'.$locale } }} @endif</div>
                                    </div>
                                </div>
                                <div class="quote-icon flaticon-quote-2"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="news-section">
        <div class="pattern-layer" style="background-image:url({{ asset('assets/images/background/pattern-11.png') }})"></div>
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="title">{{ __('homePage.Our Blogs') }}</div>
                <h2>{{ __('homePage.Latest articles & news') }}</h2>
                <div class="text">{{ __('homePage.home page blog description') }} <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></div>
            </div>
            <div class="inner-container">
                <div class="icon-layer-one" style="background-image:url({{ asset('assets/images/icons/icon-1.png') }})"></div>
                <div class="icon-layer-two" style="background-image:url({{ asset('assets/images/icons/icon-2.png') }})"></div>
                <div class="icon-layer-three" style="background-image:url({{ asset('assets/images/icons/icon-2.png') }})"></div>
                <div class="row clearfix">
                    @foreach($blogs as $blog)
                        <div class="news-block col-lg-6 col-md-6 col-sm-12" wire:key="{{ $blog->id }}">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="image">
                                    <a href="@if($locale == 'tr') {{ '/blog/'.$blog->slug }} @else {{ '/blog/'.$blog->{'slug_' . $locale} }} @endif">
                                        <img src="{{ url('storage', $blog->image) }}" alt="@if($locale == 'tr') {{ $blog->title }} @else {{ $blog->{ 'title_'.$locale } }} @endif" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <div class="border-layer"></div>
                                    <ul class="post-info">
                                        <li>@if($locale == 'tr') {{ $blog->blogCategory->name }} @else {{ $blog->blogCategory->{'name_' . $locale} }} @endif</li>
                                        <li>Updated  {{ $blog->created_at->diffForHumans() }}</li>
                                    </ul>
                                    <h4>
                                        <a href="@if($locale == 'tr') {{ '/blog/'.$blog->slug }} @else {{ '/blog/'.$blog->{'slug_' . $locale} }} @endif">
                                            @if($locale == 'tr') {{ $blog->title }} @else {{ $blog->{ 'title_'.$locale } }} @endif
                                        </a>
                                    </h4>
                                    <a href="@if($locale == 'tr') {{ '/blog/'.$blog->slug }} @else {{ '/blog/'.$blog->{'slug_' . $locale} }} @endif" class="more">
                                        {{ __('homePage.More') }} <span class="fa fa-angle-double-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    @foreach($partners as $partner)
                        <li class="slide-item"><figure class="image-box"><a href="{{ $partner->link ?? 'javascript: void(0)' }}"><img src="{{ url('storage', $partner->image) }}" alt=""></a></figure></li>
                    @endforeach
                </ul>
            </div>

        </div>
    </section>
    @livewire('partials.footer')
</div>
