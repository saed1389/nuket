<div>
    <div class="preloader"></div>
    @livewire('partials.navbar')
    <section class="cource-detail-banner-section">
        <div class="pattern-layer-one" style="background-image: url({{ asset('assets/images/icons/icon-5.png') }})"></div>
        <div class="pattern-layer-two" style="background-image: url({{ asset('assets/images/icons/icon-6.png') }})"></div>
        <div class="pattern-layer-three" style="background-image: url({{ asset('assets/images/icons/icon-4.png') }})"></div>
        <div class="pattern-layer-four" style="background-image: url({{ asset('assets/images/icons/icon-8.png') }})"></div>
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="/">{{ __('homePage.home') }}</a></li>
                <li><a href="/courses">{{ __('homePage.Training') }}</a></li>
                <li>@if($lang == 'tr') {{ $course->name }} @else {{ $course->{ 'name_'.$lang } }} @endif</li>
            </ul>
            <div class="content-box">
                <h2>@if($lang == 'tr') {{ $course->name }} @else {{ $course->{ 'name_'.$lang } }} @endif <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></h2>
                <ul class="course-info">
                    <li><span class="icon fa fa-clock-o"></span>{{ __('homePage.Updated') }} : {{ $course->created_at->diffForHumans() }}</li>
                </ul>
                <div class="development">@if($lang == 'tr') {{ $course->category->name }} @else {{ $course->category->{ 'name_'.$lang } }} @endif</div>
                <ul class="social-box">
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <span class="fa fa-share-alt"></span>
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_sms"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_linkedin"></a>
                    </div>
                </ul>
            </div>
        </div>
    </section>
    <section class="course-detail-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h5>{{ __('homePage.Training Description') }}</h5>
                        <div>
                            @if($lang == 'tr') {!!   $course->description !!} @else {!!  $course->{ 'description_'.$lang } !!} @endif
                        </div>
                        <hr>
                        <h5 class="mt-5">{{ __('homePage.Trainer') }}</h5>
                        <div class="author-box">
                            <div class="box-inner">
                                <div class="image">
                                    <img src="{{ url('storage', $course->teacher->image) }}" alt="{{ $course->teacher->name }}" />
                                </div>
                                <h6>{{ $course->teacher->name }} <a href="" class="icon fa fa-plus"></a></h6>
                                <div class="designation">@if($lang == 'tr') {{ $course->teacher->category->name }} @else {{ $course->teacher->category->{ 'name_'.$lang } }}@endif</div>
                                <div class="text">@if($lang == 'tr') {!! \Illuminate\Support\Str::limit($course->teacher->description, 200, '...')  !!} @else {!! \Illuminate\Support\Str::limit($course->teacher->{ 'description_'.$lang }, 200, '...')  !!} @endif</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column" >
                        @if($course->price)
                            @if($course->discount)
                                <div class="price" style="text-align-last: center;">{{ \Illuminate\Support\Number::currency($course->discount, 'EUR') }}  <i> {{ \Illuminate\Support\Number::currency($course->price, 'EUR') }} </i></div>
                            @else
                                <div class="price" style="text-align-last: center;">{{ \Illuminate\Support\Number::currency($course->price, 'EUR') }} </div>
                            @endif
                        @else
                            <div class="price"> - </div>
                        @endif
                        <div class="mt-2" style="text-align-last: center;">
                            <img class="rounded " src="{{ url('storage', $course->image) }}" alt="">
                        </div>
                            @if($course->intro_video)
                                <iframe class="mt-4" width="100%" height="" src="{{ $course->intro_video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @endif
                        <h5>{{ __('homePage.This training includes') }}:</h5>
                        <ul class="level-list">
                            <li>{{ __('homePage.level') }} :<span>@if($lang == 'tr') {{ $course->level->name }} @else {{ $course->level->{ 'name_'.$lang } }}@endif</span></li>
                            <li>{{ __('homePage.Max Student') }} :<span>{{ $course->max_students }}</span></li>
                            <li>{{ __('homePage.Start training') }} :<span>{{ $course->course_start_date }}</span></li>
                            <li>{{ __('homePage.Duration') }} :<span>{{ $course->course_duration }}</span></li>
                        </ul>
                        <div class="btns-box">
                            <a href="#" class="theme-btn enrol-btn">{{ __('homePage.ENROL NOW') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('partials.footer')
    <script async src="https://static.addtoany.com/menu/page.js"></script>
</div>
