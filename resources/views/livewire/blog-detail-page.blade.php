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
                <li>@if($lang == 'tr') {{ $blog->title }} @else {{ $blog->{ 'title_'.$lang } }} @endif</li>
            </ul>
            <div class="content-box">
                <div class="title">@if($lang == 'tr') {{ $blog->blogCategory->name }} @else {{ $blog->blogCategory->{'name_' . $lang} }} @endif</div>
                <h2>@if($lang == 'tr') {{ $blog->title }} @else {{ $blog->{ 'title_'.$lang } }} @endif <a href=""><img src="{{ asset('assets/images/log.png') }}" alt="" style="width: 50px;"></a></h2>
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="author-info">
                            <div class="author-image">
                                <img src="{{ asset('assets/images/resource/parent-2.png') }}" alt="@if($lang == 'tr') {{ $blog->blogCategory->name }} @else {{ $blog->blogCategory->{'name_' . $lang} }} @endif" />
                            </div>
                            <strong>{{ __('homePage.Post At') }}</strong>
                            {{ $blog->created_at->diffForHumans() }}
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
                                        <img class="rounded" src="{{ url('storage', $blog->image) }}" alt="@if($lang == 'tr') {{ $blog->blogCategory->name }} @else {{ $blog->blogCategory->{'name_' . $lang} }} @endif">
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box mt-5">
                                <p>
                                    @if($lang == 'tr') {!! $blog->description !!} @else {!! $blog->{'description_'. $lang} !!} @endif
                                </p>
                            </div>
                            {{--<div class="comment-form">
                                <div class="group-title"><h4>Leave A Comment</h4></div>
                                <form method="post" action="">
                                    <div class="form-group">
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="topic" placeholder="Topic" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="" name="message" placeholder="Type your comment"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Post comment</span></button>
                                    </div>
                                </form>
                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h4>{{ __('homePage.Recent Post') }}</h4>
                            </div>
                            @foreach($relatedBlogs as $item)
                                <div class="widget-content">
                                    <article class="post">
                                        <figure class="post-thumb">
                                            <img src="{{ url('storage', $item->image) }}" alt="@if($lang == 'tr') {{ $item->title }} @else {{ $item->{ 'title_'.$lang } }} @endif">
                                            <a href="@if($lang == 'tr') {{ '/blog/'.$item->slug }} @else {{ '/blog/'.$item->{'slug_' . $lang} }} @endif" class="overlay-box">
                                                <span class="icon fa fa-link"></span>
                                            </a>
                                        </figure>
                                        <div class="post-info">{{ $item->created_at->diffForHumans() }}</div>
                                        <div class="text">
                                            <a href="@if($lang == 'tr') {{ '/blog/'.$item->slug }} @else {{ '/blog/'.$item->{'slug_' . $lang} }} @endif">@if($lang == 'tr') {{ $item->title }} @else {{ $item->{ 'title_'.$lang } }} @endif </a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    @livewire('partials.footer')
</div>
